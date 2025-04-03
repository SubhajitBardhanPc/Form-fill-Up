<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Admit Card</h2>
<p><strong>Name:</strong> {{ $user->fullname }}</p>
<p><strong>Email:</strong> {{ $user->email }}</p>
<p><strong>Exam Center:</strong> {{ $user->examcenter }}</p>
<img src="{{ asset('storage/' . $user->photo) }}" width="100">
<img src="{{ asset('storage/' . $user->signature) }}" width="100">

</body>
</html>