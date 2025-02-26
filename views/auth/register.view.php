<x-header/>
    <style>
        .signup-wrapper {
            display: flex;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: 40px  auto;
            width: 100%;
            overflow: hidden;
        }
        .signup-image {
            flex: 1;
            background: url('img/signup.jpeg') no-repeat center center/cover;
        }
        .signup-container {
            flex: 1;
            padding: 40px;
        }
        .signup-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .signup-container h2 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #073E5D;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group input:focus {
            outline: none;
            border-color: #073E5D;
        }
        .form-group.name {
            display: flex;
            gap: 10px;
        }
        .form-group.name input {
            flex: 1;
        }
        .create-account-btn {
            width: 100%;
            padding: 10px;
            background-color: #073E5D;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
        .create-account-btn:hover {
            background-color: #052c42;
        }
        .social-signup {
            text-align: center;
            margin: 20px 0;
        }
        .social-signup p {
            margin-bottom: 10px;
            color: #666;
        }
        .social-signup .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .social-signup .social-icons a {
            color: #073E5D;
            font-size: 24px;
            text-decoration: none;
        }
        .social-signup .social-icons a:hover {
            color: #052c42;
        }
        @media (max-width: 768px) {
            .signup-image {
                display: none;
            }
            .signup-wrapper {
                flex-direction: column;
            }
            .signup-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="signup-wrapper">
        <div class="signup-image"></div>
        <div class="signup-container">
            <h1>Create Your Account</h1>
            
            <!-- Registration Form -->
            <form id="registerForm">
                @csrf <!-- CSRF Token for Laravel -->
                <div class="form-group name">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="first_name" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="last_name" placeholder="Last Name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email ID" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password" required>
                </div>

                <button type="submit" class="create-account-btn">CREATE ACCOUNT</button>
            </form>

            <div class="social-signup">
                <p>Sign up with</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-google"></i></a>
                    <a href="#"><i class="fab fa-microsoft"></i></a>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function () {
            // Handle form submission
            $('#registerForm').on('submit', function (e) {
                e.preventDefault(); // Prevent default form submission

                // Serialize form data
                const formData = $(this).serialize();

                // Send AJAX request
                $.ajax({
                    url: "{{ route('register') }}", // Laravel route
                    type: "POST",
                    data: formData,
                    success: function (response) {
                        // Show success toast
                        showToast(response.message, 'success');

                        // Clear form fields
                        $('#registerForm')[0].reset();
                    },
                    error: function (xhr) {
                        // Show error toast
                        const errors = xhr.responseJSON.errors;
                        let errorMessage = 'Registration failed. Please check the form.';
                        if (errors) {
                            errorMessage = Object.values(errors).join('<br>');
                        }
                        showToast(errorMessage, 'error');
                    }
                });
            });
        });
    </script>
    <x-footer/>
</body>
</html>