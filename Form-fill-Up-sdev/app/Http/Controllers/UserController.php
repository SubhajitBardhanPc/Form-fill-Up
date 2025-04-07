<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        // Hash the password
        $hashedPassword = bcrypt($validatedData['password']);

        // Create a new user and save data to the database
        User::create([
            'email' => $validatedData['email'],
            'password' => $hashedPassword,
        ]);

        // Return a response (redirect or success message)
        return redirect()->back()->with('success', 'User saved successfully!');
    }
}
