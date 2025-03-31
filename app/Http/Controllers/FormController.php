<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class FormController extends Controller
{
    //Form Controller
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
