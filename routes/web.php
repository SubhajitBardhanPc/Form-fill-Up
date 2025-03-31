<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashBoardController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// Route to display the form using the FormController
Route::get('/', [FormController::class, 'showForm'])->name('form.show');

// Route to display a 'welcome' view directly
Route::get('/form', function () {
    return view('welcome'); // Ensure the 'welcome.blade.php' file exists in the 'resources/views' directory
})->name('form.welcome');

// Route to handle dashboard functionality using DashBoardController
Route::get('/dashboard', [DashBoardController::class, 'dashboard'])->name('dashboard');


Route::get('/login',function(){
    return view ('login');
});
Route::get('/register',function(){
    return view('welcome');
});

Route::post('/register', function (Request $request) {
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    // Store the user in the database
    User::create([
        'email' => $request->email,
        'password' => Hash::make($request->password), // Encrypt password
    ]);

    return response()->json(['message' => 'User registered successfully']);
});
