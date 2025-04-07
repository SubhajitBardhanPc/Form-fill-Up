<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admit Page</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            margin-top: 50px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            color: #6c757d;
            font-size: 16px;
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #495057;
            margin-bottom: 10px;
        }

        input[type="email"] {
            width: 93%;
            padding: 12px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #495057;
        }

        input[type="email"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px #007bff;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
        }

        button:hover {
            background-color: #0056b3;
        }

        #result {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            text-align: center;
            color: #343a40;
        }

        footer {
            margin-top: 30px;
            font-size: 12px;
            color: #6c757d;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admit Card Validation</h1>
        <p>Enter your registered email to check your admit details.</p>

        <form method="POST" action="{{ route('user.validateEmail') }}">
            @csrf
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Validate</button>
        </form>

        @if(session('error'))
            <div id="result" style="color: red;">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <footer>&copy; 2025 Admit Page</footer>
</body>
</html>
