<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GATE Examination Form</title>
    <link rel="stylesheet" href="{{ asset('css/Gstyles.css') }}"> <!-- Linking the external CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        </nav>
    </header>
    <div class="form-container">
        <h1>GATE Examination Form</h1>
        <form>
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
    
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
    
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" maxlength="10" required>
                <small style="color: #888;">Enter a 10-digit phone number</small>
            </div>
    
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
    
            <div class="form-group">
                <label for="state">State:</label>
                <select id="state" name="state" required>
                    <option value="" disabled selected>Select</option>
                    <option value="AP">Andhra Pradesh</option>
                    <option value="AR">Arunachal Pradesh</option>
                    <option value="AS">Assam</option>
                    <option value="BR">Bihar</option>
                    <option value="CT">Chhattisgarh</option>
                    <option value="GA">Goa</option>
                    <option value="GJ">Gujarat</option>
                    <option value="HR">Haryana</option>
                    <option value="HP">Himachal Pradesh</option>
                    <option value="JK">Jammu and Kashmir</option>
                    <option value="JH">Jharkhand</option>
                    <option value="KA">Karnataka</option>
                    <option value="KL">Kerala</option>
                    <option value="MP">Madhya Pradesh</option>
                    <option value="MH">Maharashtra</option>
                    <option value="MN">Manipur</option>
                    <option value="ML">Meghalaya</option>
                    <option value="MZ">Mizoram</option>
                    <option value="NL">Nagaland</option>
                    <option value="OR">Odisha</option>
                    <option value="PB">Punjab</option>
                    <option value="RJ">Rajasthan</option>
                    <option value="SK">Sikkim</option>
                    <option value="TN">Tamil Nadu</option>
                    <option value="TG">Telangana</option>
                    <option value="TR">Tripura</option>
                    <option value="UP">Uttar Pradesh</option>
                    <option value="UT">Uttarakhand</option>
                    <option value="WB">West Bengal</option>
                    <option value="AN">Andaman and Nicobar Islands</option>
                    <option value="CH">Chandigarh</option>
                    <option value="DN">Dadra and Nagar Haveli</option>
                    <option value="DD">Daman and Diu</option>
                    <option value="DL">Delhi</option>
                    <option value="LD">Lakshadweep</option>
                    <option value="PY">Puducherry</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="pincode">PIN Code:</label>
                <input type="text" id="pincode" name="pincode" pattern="[0-9]{6}" maxlength="6" required>
                <small style="color: #888;">Enter a valid 6-digit PIN code</small>
            </div>
    
            <div class="form-group">
                <label for="degree">Degree:</label>
                <input type="text" id="degree" name="degree" required>
            </div>
    
            <div class="form-group">
                <label for="specialization">Specialization:</label>
                <input type="text" id="specialization" name="specialization" required>
            </div>
    
            <div class="form-group">
                <label for="university">University Name:</label>
                <input type="text" id="university" name="university" required>
            </div>
    
            <div class="form-group">
                <label for="yearofpassing">Year of Passing:</label>
                <select id="yearofpassing" name="yearofpassing" required>
                    <option value="" disabled selected>Select Year</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="papercode">GATE Paper Code:</label>
                <input type="text" id="papercode" name="papercode" required>
            </div>
    
            <div class="form-group">
                <label for="address">Residential Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
    
            <div class="form-group">
                <label for="examcenter">Preferred Exam Center:</label>
                <select id="examcenter" name="examcenter" required>
                    <option value="" disabled selected>Select Exam Center</option>
                    <option value="kolkata">Kolkata</option>
                    <option value="delhi">Delhi</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="chennai">Chennai</option>
                    <option value="bangalore">Bangalore</option>
                    <option value="hyderabad">Hyderabad</option>
                    <option value="pune">Pune</option>
                </select>
            </div>
    
            <div class="form-group-full">
                <label for="photo">Upload Recent Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>
            </div>
    
            <div class="form-group-full">
                <label for="signature">Upload Signature:</label>
                <input type="file" id="signature" name="signature" accept="image/*" required>
            </div>
    
            <div class="form-group-full">
                <label>
                    <input type="checkbox" name="agreement" required> I agree to the Terms & Conditions
                </label>
            </div>
    
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
