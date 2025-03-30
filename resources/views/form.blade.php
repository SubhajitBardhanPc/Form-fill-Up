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

    <!-- Image Slider Section -->
    <!-- Notice Board Section -->
<section class="notice-board">
    <h2>Notice Board</h2>
    <ul id="notice-list">
        <!-- Notices will be dynamically added here -->
    </ul>
    <a href="/notices" class="view-all">View All Notices</a>
</section>

<!-- External JavaScript -->
<script src="{{ asset('js/notice-board.js') }}"></script>


    <!-- Notice Board Section -->
    <section class="notice-board">
        <h2>Notice Board</h2>
        <ul>
            <li>Notice 1: Important update about event A.</li>
            <li>Notice 2: Reminder for the upcoming meeting.</li>
            <li>Notice 3: Deadline for registration is approaching.</li>
        </ul>
    </section>

    <!-- Checkbox and Link to Form -->
    <div class="form-link-section">
        <label>
            <input type="checkbox" id="enable-link"> Agree to Terms & Conditions
        </label>
        <a href="/form" class="form-link disabled" id="form-link" aria-disabled="true">Go to Form</a>
    </div>

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
    <script>
        function toggleDrawer() {
            const drawer = document.getElementById("sideDrawer");
            drawer.classList.toggle("open");
        }
    </script>
</body>
</html>
