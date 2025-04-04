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
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <!-- Side Drawer -->
    <!-- Side Drawer -->
<div class="side-drawer" id="sideDrawer">
    <button class="close-btn" onclick="toggleDrawer()">&times;</button>
    <a href="{{ route('form.show') }}">Home</a>
    <a href="{{ route('form.welcome') }}">Resgister</a>
    
</div>

<!-- Header Section -->
<header class="header">
    <button class="menu-btn" onclick="toggleDrawer()">&#9776;</button>
    <nav class="nav-links">
        <a href="{{ route('form.show') }}">Home</a>
        <a href="{{ route('form.welcome') }}">Resgister</a>
        
    </nav>
</header>

    <!-- Registration Section -->
    <div class="login-container">
        <h2>Register</h2>
        <form id="loginForm">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
    
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
    
            <button type="submit">Register</button>
        </form>
         <!-- Login Hyperlink -->
    <p>Already registered? <a href="/login">Login here</a></p>
    </div>
    <!-- Registration Section -->



    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 Your Company. All rights reserved.</p>
            <nav class="footer-nav">
                <a href="#">Resgister</a> |
                <a href="#">Contact</a> |
                <a href="#">Privacy Policy</a>
            </nav>
            <p>Email: contact@yourcompany.com | Phone: +123 456 7890</p>
        </div>
    </footer>

    <!-- External JavaScript -->
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/form-link.js') }}"></script>
    
    <script>
        function toggleDrawer() {
            const drawer = document.getElementById("sideDrawer");
            drawer.classList.toggle("open");
        }

        document.getElementById("loginForm").addEventListener("submit", async function(event) {
            event.preventDefault();
    
            const formData = new FormData(this);
    
            const response = await fetch("/register", {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                    "Accept": "application/json"
                }
            });
    
            const result = await response.json();
            alert(result.message);
        });
    </script>
</body>
</html>