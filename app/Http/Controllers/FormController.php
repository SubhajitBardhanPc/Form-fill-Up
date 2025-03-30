<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //Form Controller
    public function showForm(){
        return view('form');
    }
}
