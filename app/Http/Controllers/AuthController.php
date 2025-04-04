<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GATEForm;

class AuthController extends Controller
{
    //
    // Login functionality
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        // Search for the user in the 'g_a_t_e_forms' table
        $user = GATEForm::where('email', $request->email)->first();

        if ($user) {
            // Redirect to the dashboard with user details
            return redirect()->route('user.dashboard')->with('userData', $user);
        } else {
            // Return error if user is not found
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
    // Load the admit page view
    return view('admit'); // Make sure 'admit.blade.php' exists in the views directory
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
            // Redirect to the admit card page with user data
            return view('admit_card', compact('user'));
        } else {
            // Return back with an error message
            return redirect()->back()->with('error', 'Email not found! Please check your email.');
        }
    }

}
