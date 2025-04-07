@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Admin Panel - GATE Form Data</h2>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>Email</th>
                <th>State</th>
                <th>Pincode</th>
                <th>Degree</th>
                <th>Specialization</th>
                <th>University</th>
                <th>Year of Passing</th>
                <th>Paper Code</th>
                <th>Address</th>
                <th>Exam Center</th>
                <th>Photo</th>
                <th>Signature</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($forms as $form)
            <tr>
                <td>{{ $form->id }}</td>
                <td>{{ $form->fullname }}</td>
                <td>{{ $form->dob }}</td>
                <td>{{ $form->gender }}</td>
                <td>{{ $form->contact }}</td>
                <td>{{ $form->email }}</td>
                <td>{{ $form->state }}</td>
                <td>{{ $form->pincode }}</td>
                <td>{{ $form->degree }}</td>
                <td>{{ $form->specialization }}</td>
                <td>{{ $form->university }}</td>
                <td>{{ $form->yearofpassing }}</td>
                <td>{{ $form->papercode }}</td>
                <td>{{ $form->address }}</td>
                <td>{{ $form->examcenter }}</td>
                <td>
                    <img src="{{ asset($form->photo) }}" alt="Photo" width="50" class="img-thumbnail">
                </td>
                <td>
                    <img src="{{ asset($form->signature) }}" alt="Signature" width="50" class="img-thumbnail">
                </td>
                <td>
                    <a href="#" class="btn btn-info btn-sm">View</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
