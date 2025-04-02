<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GATEForm; // Import the Model
class GATEFormController extends Controller
{
    public function store(Request $request)
{
    // Validate the form input with custom error messages
    $validatedData = $request->validate([
        'fullname' => 'required|string|max:255',
        'dob' => 'required|date',
        'gender' => 'required|in:male,female,other',
        'contact' => 'required|digits:10',
        'email' => 'required|email|unique:g_a_t_e_forms,email',
        'state' => 'required|string',
        'pincode' => 'required|digits:6',
        'degree' => 'required|string',
        'specialization' => 'required|string',
        'university' => 'required|string',
        'yearofpassing' => 'required|integer',
        'papercode' => 'required|string',
        'address' => 'required|string',
        'examcenter' => 'required|string',
        'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'signature' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ], [
        'email.unique' => 'This email is already associated with a form!',
        'photo.mimes' => 'The photo must be in jpg, jpeg, or png format.',
        'signature.mimes' => 'The signature must be in jpg, jpeg, or png format.',
    ]);

    // Save the uploaded files
    $photoPath = $request->file('photo')->store('photos', 'public');
    $signaturePath = $request->file('signature')->store('signatures', 'public');

    // Save the data into the database
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

    // Redirect to a thank-you page with a success message
    return redirect()->route('form.success')->with('success', 'Form submitted successfully!');
}

    

}
