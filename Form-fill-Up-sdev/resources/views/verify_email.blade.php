<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Verification</title>
    <link rel="stylesheet" href="{{ asset('css/emailvalidator.css') }}">
    <script>
        function generateOTP() {
            let otp = Math.floor(100000 + Math.random() * 900000); // 6-digit OTP
            alert("Your OTP is: " + otp);
            document.getElementById("otpInput").dataset.generatedOtp = otp; // Store OTP in data attribute
        }

        function validateOTP(event) {
            let userOtp = document.getElementById("otpInput").value;
            let generatedOtp = document.getElementById("otpInput").dataset.generatedOtp;

            if (userOtp !== generatedOtp) {
                alert("Invalid OTP! Please try again.");
                event.preventDefault(); // Stop form submission
            }
        }

        window.onload = function() {
            generateOTP(); // Generate OTP when page loads
        };
    </script>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="logo">
        <h2>Email Verification</h2>
        <p>We have sent an OTP to your email: <b>{{ $email }}</b>. Please enter it below:</p>
        <form action="{{ route('validate.otp') }}" method="POST" onsubmit="validateOTP(event)">
            @csrf
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="text" id="otpInput" name="otp" placeholder="Enter OTP" required>
            <button type="submit">Verify</button>
        </form>
    </div>
</body>
</html>
