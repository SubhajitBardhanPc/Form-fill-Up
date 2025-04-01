<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('form'); // Ensure you have 'form.blade.php' in your 'resources/views/' directory
    }

    // Handle form submission and store user data
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password), // Secure password hashing
        ]);

        return redirect()->back()->with('success', 'Data saved successfully!');
    }
}
