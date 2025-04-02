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
    
}
