<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GATE Examination Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- External CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/Gstyles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notice-board.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form-link.css') }}">
    <link rel="stylesheet" href="{{ asset('css/drawer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    {{-- <div class="side-drawer" id="sideDrawer">
        <button class="close-btn" onclick="toggleDrawer()">&times;</button>
        <a href="{{ route('form.show') }}">Home</a>
        <a href="{{ route('form.welcome') }}">Register</a>
        
    </div> --}}
    
    <!-- Header Section -->
    <header class="header">
        <button class="menu-btn" onclick="toggleDrawer()">&#9776;</button>
        <nav class="nav-links">
            <a href="{{ route('form.show') }}">Home</a>
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
                @error('fullname')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- Date of Birth -->
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" value="{{ old('dob') }}" required>
                @error('dob')<span class="error-message">{{ $message }}</span>@enderror
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
                @error('gender')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- Contact Number -->
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" maxlength="10" value="{{ old('contact') }}" required>
                <small>Enter a 10-digit phone number</small>
                @error('contact')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- Email -->
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- State -->
            <div class="form-group">
                <label for="state">State:</label>
                <select id="state" name="state" required>
                    <option value="" disabled>Select</option>
                    <option value="AP">Andhra Pradesh</option>
                    <option value="WB">West Bengal</option>
                    <option value="MH">Maharashtra</option>
                    <option value="DL">Delhi</option>
                </select>
                @error('state')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- PIN Code -->
            <div class="form-group">
                <label for="pincode">PIN Code:</label>
                <input type="text" id="pincode" name="pincode" pattern="[0-9]{6}" maxlength="6" value="{{ old('pincode') }}" required>
                @error('pincode')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- Degree -->
            <div class="form-group">
                <label for="degree">Degree:</label>
                <input type="text" id="degree" name="degree" value="{{ old('degree') }}" required>
                @error('degree')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- Specialization (Added) -->
            <div class="form-group">
                <label for="specialization">Specialization:</label>
                <input type="text" id="specialization" name="specialization" value="{{ old('specialization') }}" required>
                @error('specialization')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- University -->
            <div class="form-group">
                <label for="university">University:</label>
                <input type="text" id="university" name="university" value="{{ old('university') }}" required>
                @error('university')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- Year of Passing -->
            <div class="form-group">
                <label for="yearofpassing">Year of Passing:</label>
                <input type="number" id="yearofpassing" name="yearofpassing" value="{{ old('yearofpassing') }}" required>
                @error('yearofpassing')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- Paper Code -->
            <div class="form-group">
                <label for="papercode">Paper Code:</label>
                <input type="text" id="papercode" name="papercode" value="{{ old('papercode') }}" required>
                @error('papercode')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- Address -->
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required>{{ old('address') }}</textarea>
                @error('address')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- Exam Center -->
            <div class="form-group">
                <label for="examcenter">Exam Center:</label>
                <select id="examcenter" name="examcenter" required>
                    <option value="" disabled {{ old('examcenter') == null ? 'selected' : '' }}>Select Exam Center</option>
                    <option value="Mumbai" {{ old('examcenter') == 'Mumbai' ? 'selected' : '' }}>Mumbai</option>
                    <option value="Delhi" {{ old('examcenter') == 'Delhi' ? 'selected' : '' }}>Delhi</option>
                    <option value="Kolkata" {{ old('examcenter') == 'Kolkata' ? 'selected' : '' }}>Kolkata</option>
                    <option value="Chennai" {{ old('examcenter') == 'Chennai' ? 'selected' : '' }}>Chennai</option>
                    <option value="Bangalore" {{ old('examcenter') == 'Bangalore' ? 'selected' : '' }}>Bangalore</option>
                    <option value="Hyderabad" {{ old('examcenter') == 'Hyderabad' ? 'selected' : '' }}>Hyderabad</option>
                    <option value="Pune" {{ old('examcenter') == 'Pune' ? 'selected' : '' }}>Pune</option>
                    <option value="Ahmedabad" {{ old('examcenter') == 'Ahmedabad' ? 'selected' : '' }}>Ahmedabad</option>
                    <option value="Lucknow" {{ old('examcenter') == 'Lucknow' ? 'selected' : '' }}>Lucknow</option>
                    <option value="Jaipur" {{ old('examcenter') == 'Jaipur' ? 'selected' : '' }}>Jaipur</option>
                </select>
                @error('examcenter')<span class="error-message">{{ $message }}</span>@enderror
            </div>
            
    
            <!-- Photo Upload -->
            <div class="form-group-full">
                <label for="photo">Upload Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>
                @error('photo')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <!-- Signature Upload -->
            <div class="form-group-full">
                <label for="signature">Upload Signature:</label>
                <input type="file" id="signature" name="signature" accept="image/*" required>
                @error('signature')<span class="error-message">{{ $message }}</span>@enderror
            </div>
    
            <div class="form-group-full">
                <input type="checkbox" id="agree" name="agree" required>
                <label for="agree">I confirm that the information provided is accurate and complete.</label>
                @error('agree')<span class="error-message">{{ $message }}</span>@enderror
            </div>
            
            <!-- Submit Button -->
            <button type="submit" id="submit-btn" disabled>Submit</button>
            
        </form>
    </div>
    

    <footer class="footer">
        <p>&copy; 2025 Your Company. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector("form");
            const submitBtn = document.getElementById("submit-btn");
            const checkbox = document.getElementById("agree");

            function validateForm() {
                let allFilled = true;
                const inputs = form.querySelectorAll("input[required], select[required], textarea[required]");
                
                inputs.forEach(input => {
                    if (input.type === "file" && !input.files.length) {
                        allFilled = false;
                    } else if (input.type !== "file" && !input.value.trim()) {
                        allFilled = false;
                    }
                });
                
                // Enable submit button if all fields are filled and checkbox is checked
                submitBtn.disabled = !(allFilled && checkbox.checked);
            }

            // Attach event listeners to all required fields
            form.querySelectorAll("input, select, textarea").forEach(element => {
                element.addEventListener("input", validateForm);
                element.addEventListener("change", validateForm);
            });
            
            checkbox.addEventListener("change", validateForm);
        });

        function toggleDrawer() {
            document.getElementById("sideDrawer").classList.toggle("open");
        }
    </script>
</body>
</html>
