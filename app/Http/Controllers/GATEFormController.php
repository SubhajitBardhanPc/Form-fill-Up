<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GATEForm; // Import the Model
class GATEFormController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'contact' => 'required|digits:10',
            'email' => 'required|email',
            'state' => 'required|string',
            'pincode' => 'required|digits:6',
            'degree' => 'required|string',
            'specialization' => 'required|string',
            'university' => 'required|string',
            'yearofpassing' => 'required|integer',
            'papercode' => 'required|string',
            'address' => 'required|string',
            'examcenter' => 'required|string',
            'photo' => 'required|image|max:2048', // Validate photo file
            'signature' => 'required|image|max:2048', // Validate signature file
        ]);

        // Save the uploaded files
        $photoPath = $request->file('photo')->store('photos', 'public');
        $signaturePath = $request->file('signature')->store('signatures', 'public');

        // Save data into the database
        GATEForm::create([
            'fullname' => $validatedData['fullname'],
            'dob' => $validatedData['dob'],
            'gender' => $validatedData['gender'],
            'contact' => $validatedData['contact'],
            'email' => $validatedData['email'],
            'state' => $validatedData['state'],
            'pincode' => $validatedData['pincode'],
            'degree' => $validatedData['degree'],
            'specialization' => $validatedData['specialization'],
            'university' => $validatedData['university'],
            'yearofpassing' => $validatedData['yearofpassing'],
            'papercode' => $validatedData['papercode'],
            'address' => $validatedData['address'],
            'examcenter' => $validatedData['examcenter'],
            'photo' => $photoPath,
            'signature' => $signaturePath,
        ]);

        // Return a response
        return back()->with('success', 'Form submitted successfully!');
    }
}
