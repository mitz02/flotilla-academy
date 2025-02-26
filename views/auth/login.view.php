<x-header/>
    <style>
      
        .login-wrapper {
            display: flex;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: 40px auto;
            width: 100%;
            overflow: hidden;
        }
        .login-image {
            flex: 1;
            background: url('img/signup.jpeg') no-repeat center center/cover;
        }
        .login-container {
            flex: 1;
            padding: 40px;
        }
        .login-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
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
        .sign-in-btn {
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
        .sign-in-btn:hover {
            background-color: #052c42;
        }
        .social-signin {
            text-align: center;
            margin: 20px 0;
        }
        .social-signin p {
            margin-bottom: 10px;
            color: #666;
        }
        .social-signin .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .social-signin .social-icons a {
            color: #073E5D;
            font-size: 24px;
            text-decoration: none;
        }
        .social-signin .social-icons a:hover {
            color: #052c42;
        }
      
        @media (max-width: 768px) {
            .login-image {
                display: none;
            }
            .login-wrapper {
                flex-direction: column;
            }
            .login-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-image"></div>
        <div class="login-container">
            <h1>Sign in to your account</h1>
            
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Username or Email ID" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter Password" required>
                </div>

                <button type="submit" class="sign-in-btn">SIGN IN</button>
            </form>

            <div class="social-signin">
                <p>Sign in with</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-google"></i></a>
                    <a href="#"><i class="fab fa-microsoft"></i></a>
                </div>
            </div>

            
        </div>
    </div>
    <x-footer/>
</body>
</html>