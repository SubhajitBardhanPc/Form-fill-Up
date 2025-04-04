<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Header Styles */
        .header {
            width: 100%;
            background-color: #007bff;
            padding: 15px 20px;
            display: flex;
            justify-content: flex-end;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .logout-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

        /* Container Styles */
        .container {
            width: 100%;
            max-width: 400px;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
            text-align: center;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-message {
            margin-top: 15px;
            color: red;
            font-size: 14px;
            font-weight: bold;
        }

        .otp-info {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 20px;
        }
    </style>
    <script>
        window.onload = function() {
            alert("Your OTP is: {{ $otp }}"); // Show OTP in an alert box
        };
    </script>
</head>
<body>
    <!-- Header with Logout Button -->
    <div class="header">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

    <!-- OTP Verification Container -->
    <div class="container">
        <h1>OTP Verification</h1>
        <p class="otp-info">Enter the OTP sent to your registered email.</p>
        <form method="POST" action="{{ route('verify.otp') }}">
            @csrf
            <label for="otp">Enter OTP:</label>
            <input type="text" id="otp" name="otp" required>
            <button type="submit">Submit</button>
        </form>

        @if(session('error'))
            <p class="error-message">{{ session('error') }}</p>
        @endif
    </div>
</body>
</html>
