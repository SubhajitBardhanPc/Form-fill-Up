<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GATEForm;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    // Login functionality
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = GATEForm::where('email', $request->email)->first();

        if ($user) {
            return redirect()->route('user.dashboard')->with('userData', $user);
        } else {
            return back()->withErrors(['error' => 'Invalid email or password!']);
        }
    }

    // Dashboard view
    public function dashboard(Request $request)
    {
        $userData = session('userData');
        if (!$userData) {
            return redirect('/login')->withErrors(['error' => 'Please login first!']);
        }
        return view('dashboard', compact('userData'));
    }

    public function admitPage()
    {
        return view('admit');
    }

    public function validateEmail(Request $request)
    {
        // Validate the email input
        $request->validate([
            'email' => 'required|email'
        ]);

        // Check if the email exists in the database
        $user = GATEForm::where('email', $request->email)->first();

        if ($user) {
            // Generate a 6-digit OTP
            $otp = rand(100000, 999999);
            
            // Store OTP and user email in session
            Session::put('otp', $otp);
            Session::put('email', $request->email);
            
            // Send OTP to the user via email (optional)
            // Mail::to($request->email)->send(new OTPMail($otp));

            // Redirect to OTP verification page
            return view('otp_verify')->with('otp', $otp);
        } else {
            return redirect()->back()->with('error', 'Email not found! Please check your email.');
        }
    }

    public function verifyOTP(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6'
        ]);

        // Retrieve OTP from session
        $sessionOtp = Session::get('otp');
        $sessionEmail = Session::get('email');

        if ($request->otp == $sessionOtp) {
            // OTP is correct, retrieve user data
            $user = GATEForm::where('email', $sessionEmail)->first();

            // Clear OTP session
            Session::forget('otp');
            Session::forget('email');

            return view('admit_card', compact('user'));
        } else {
            return back()->with('error', 'Invalid OTP! Please try again.');
        }
    }
}
