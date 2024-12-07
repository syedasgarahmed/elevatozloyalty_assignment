<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .form-container {
            max-width: 500px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary,
        .btn-secondary:hover {
            background-color: #6c757d;
            border: none;
        }

        .btn-home {
            background-color: #28a745;
            border: none;
        }

        .btn-home:hover {
            background-color: #218838;
        }

        .success-message {
            color: #28a745;
            text-align: center;
            font-size: 1.2em;
        }

        .button-group {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1>Create Account</h1>
            @if (session('success'))
                <h5 class="success-message">{{ session('success') }}</h5>
            @endif
            <form action="{{ route('store-account') }}" method="POST" novalidate id="createAccountForm">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" placeholder="Enter your name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="nameError" class="error"></div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="emailError" class="error"></div>
                </div>

                <div class="mb-3">
                    <label for="mobile_no" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control @error('mobile_no') is-invalid @enderror" id="mobile_no"
                        name="mobile_no" placeholder="Enter your mobile number" value="{{ old('mobile_no') }}" required>
                    @error('mobile_no')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="mobileError" class="error"></div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" minlength="8"
                        id="password" name="password" placeholder="Enter your password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="passwordError" class="error"></div>
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary" id="submitBtn">Create Account</button>
                </div>

                <!-- Clear and Home buttons -->
                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onclick="clearForm()">Clear</button>
                    <a href="/" class="btn btn-home">Home</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Validation function
        function validateForm() {
            let isValid = true;

            // Clear previous error messages
            document.querySelectorAll('.error').forEach((error) => {
                error.textContent = '';
            });

            // Name validation
            const name = document.getElementById('name').value;
            if (name.trim() === '') {
                document.getElementById('nameError').textContent = 'Name is required.';
                isValid = false;
            }

            // Email validation
            const email = document.getElementById('email').value;
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email.';
                isValid = false;
            }

            // Mobile number validation (assuming 10-digit number)
            const mobileNo = document.getElementById('mobile_no').value;
            const mobilePattern = /^[0-9]{10}$/;
            if (!mobilePattern.test(mobileNo)) {
                document.getElementById('mobileError').textContent = 'Please enter a valid 10-digit mobile number.';
                isValid = false;
            }

            // Password validation
            const password = document.getElementById('password').value;
            if (password.length < 8) {
                document.getElementById('passwordError').textContent = 'Password must be at least 8 characters.';
                isValid = false;
            }

            return isValid;
        }

        // Attach the validateForm function to form submission
        document.getElementById('createAccountForm').addEventListener('submit', function(event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });

        // Clear form function
        function clearForm() {
            document.getElementById('createAccountForm').reset();
            document.querySelectorAll('.error').forEach((error) => {
                error.textContent = '';
            });
        }
    </script>
</body>

</html>
