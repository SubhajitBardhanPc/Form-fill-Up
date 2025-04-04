<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashBoardController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // ✅ Added for authentication
use App\Http\Controllers\GATEFormController;
use App\Http\Controllers\AuthController;



// Route to display the form using the FormController
Route::get('/', [FormController::class, 'showForm'])->name('form.show');

// Route to display a 'welcome' view directly
Route::get('/form', function () {
    return view('welcome'); // Ensure the 'welcome.blade.php' file exists in the 'resources/views' directory
})->name('form.welcome');

// Route to handle dashboard functionality using DashBoardController
Route::get('/dashboard', [DashBoardController::class, 'dashboard'])->name('dashboard');

// ✅ Login Page Route
Route::get('/login', function () {
    return view('login');
})->name('login');

// ✅ Register Page Route
Route::get('/register', function () {
    return view('welcome'); // This should be your register view, update if needed
})->name('register');

// ✅ Register User Route (No Change)
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

// ✅ Added POST Route for Login (Fix for your issue)
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        return response()->json(['success' => true, 'message' => 'Login successful']);
    } else {
        return response()->json(['success' => false, 'message' => 'Invalid email or password'], 401);
    }
});
Route::post('/save-form', [GATEFormController::class, 'store'])->name('save.form');
Route::get('/admit', [AuthController::class, 'admitPage'])->name('user.admit');
Route::get('/verify-email/{email}', [GATEFormController::class, 'verifyEmail'])->name('verify.email');
//
Route::post('/validate-email', [AuthController::class, 'validateEmail'])->name('user.validateEmail');

Route::post('/validate-otp', [GATEFormController::class, 'validateOtp'])->name('validate.otp');
Route::get('/admit-card/{email}', [GATEFormController::class, 'showAdmitCard'])->name('admit.card');


Route::post('/verify-otp', [AuthController::class, 'verifyOTP'])->name('verify.otp');


Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login'); // Redirect to login page after logout
})->name('logout');