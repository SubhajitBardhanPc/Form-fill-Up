<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Page</title>
    <!-- External CSS files -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notice-board.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form-link.css') }}">
    <link rel="stylesheet" href="{{ asset('css/drawer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <!-- Side Drawer -->
    <div class="side-drawer" id="sideDrawer">
        <button class="close-btn" onclick="toggleDrawer()">&times;</button>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
    
    <!-- Header Section -->
    <header class="header">
        <button class="menu-btn" onclick="toggleDrawer()">&#9776;</button>
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        <nav class="nav-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </header>

{{-- Just add OTP validation code here --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="{{ asset('css/otp.css') }}">
</head>
<body>

    <div class="otp-container">
        <h2>Login via Email & Password</h2>
        <form id="otpForm">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>
            <label for="phone">Enter Password:</label>
            <input type="text" id="phone" name="Password" placeholder="Enter your Password" required>

            <button type="button" id="sendOtp">Send OTP</button>

            <div id="otpInputSection" style="display: none;">
                <label for="otp">OTP:</label>
                <input type="text" id="otp" name="otp" placeholder="Enter OTP" required>

                <button type="submit">Verify OTP</button>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/Lscripts.js') }}"></script>

</body>
</html>


<!-- External JavaScript -->
<script src="{{ asset('js/notice-board.js') }}"></script>


   

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 Your Company. All rights reserved.</p>
            <nav class="footer-nav">
                <a href="#">About</a> |
                <a href="#">Contact</a> |
                <a href="#">Privacy Policy</a>
            </nav>
            <p>Email: contact@yourcompany.com | Phone: +123 456 7890</p>
        </div>
    </footer>

    <!-- External JavaScript -->
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/form-link.js') }}"></script>
    <script src="{{ asset('js/otp.js') }}"></script>
    <script>
        function toggleDrawer() {
            const drawer = document.getElementById("sideDrawer");
            drawer.classList.toggle("open");
        }
    </script>
</body>
</html>
