<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GATE Examination Form</title>
    <link rel="stylesheet" href="{{ asset('css/Gstyles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <nav class="nav-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="{{ route('user.admit') }}">Admit</a>
        </nav>
    </header>

    <div class="form-container">
        <h1>GATE Examination Form</h1>
        <form action="{{ route('save.form') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Full Name -->
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" value="{{ old('fullname') }}" required>
                @error('fullname')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Date of Birth -->
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" value="{{ old('dob') }}" required>
                @error('dob')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Gender -->
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled {{ old('gender') == null ? 'selected' : '' }}>Select</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('gender')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Contact -->
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" name="contact" value="{{ old('contact') }}" pattern="[0-9]{10}" maxlength="10" required>
                <small style="color: #888;">Enter a 10-digit phone number</small>
                @error('contact')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- State -->
            <div class="form-group">
                <label for="state">State:</label>
                <select id="state" name="state" required>
                    <option value="" disabled {{ old('state') == null ? 'selected' : '' }}>Select</option>
                    <option value="AP" {{ old('state') == 'AP' ? 'selected' : '' }}>Andhra Pradesh</option>
                    <option value="WB" {{ old('state') == 'WB' ? 'selected' : '' }}>West Bengal</option>
                    <!-- Add other states similarly -->
                </select>
                @error('state')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- PIN Code -->
            <div class="form-group">
                <label for="pincode">PIN Code:</label>
                <input type="text" id="pincode" name="pincode" value="{{ old('pincode') }}" pattern="[0-9]{6}" maxlength="6" required>
                <small style="color: #888;">Enter a valid 6-digit PIN code</small>
                @error('pincode')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Degree -->
            <div class="form-group">
                <label for="degree">Degree:</label>
                <input type="text" id="degree" name="degree" value="{{ old('degree') }}" required>
                @error('degree')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <!-- Degree -->
            <div class="form-group">
                <label for="papercode">Papercode:</label>
                <input type="text" id="papercode" name="papercode" value="{{ old('papercode') }}" required>
                @error('papercode')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            

            <!-- Photo -->
            <div class="form-group-full">
                <label for="photo">Upload Recent Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>
                @error('photo')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Signature -->
            <div class="form-group-full">
                <label for="signature">Upload Signature:</label>
                <input type="file" id="signature" name="signature" accept="image/*" required>
                @error('signature')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="form-group-full">
                <button type="submit">Submit</button>
            </div>
        </form>
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

    <!-- CSS Styling -->
    <style>
        .error-message {
            color: red;
            font-weight: bold;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>

    <!-- JavaScript -->
    <script>
        function toggleDrawer() {
            const drawer = document.getElementById("sideDrawer");
            drawer.classList.toggle("open");
        }
    </script>

</body>
</html>
