<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashBoardController;
Route::get('/',[FormController::class,'showForm']);
Route::get('/form', function () {
    return view('welcome');
});
Route::get("/dashboard",[DashBoardController::class,'dashboard']);


