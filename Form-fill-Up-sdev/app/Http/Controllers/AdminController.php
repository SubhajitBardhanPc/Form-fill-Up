<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GATEForm;

class AdminController extends Controller
{
    public function index()
    {
        $forms = GATEForm::all();
        return view('admin', compact('forms')); // Ensure the file name matches
    }
}
