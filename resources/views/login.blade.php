<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | FUNDar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/pages/login.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="login-container">
        <!-- Left Section -->
        <div class="left-section">
            <a class="back-btn" href="{{ route('/') }}">
                <i class="fas fa-arrow-left"></i> 
            </a>
            
            <div class="welcome-text">
                <p>Nice to see you!</p>
                <h1>Welcome Back</h1>
            </div>
            
            <div class="illustration-box">
                <img src="{{ asset('images/Login.png') }}">
            </div>
        </div>

        <!-- Right Section -->
        <div class="right-section">
            <div class="header">
                <div class="logo">
                    <img src="{{ asset('images/favicon.png') }}">
                </div>
                <div class="header-btns">
                    <a class="btn-link" href="{{ asset('login') }}" >Login</a>
                    <a class="btn-outline" href="{{ asset('registration')  }}">Register</a>
                </div>
            </div>

            <div class="login-form">
                <div class="form-title">
                    <h2>LOGIN</h2>
                    <p>Please login to continue</p>
                </div>

                <form>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                        <div class="forgot-password">
                            <a class="forgot-pass-provoke">Forgot Password</a>
                        </div>
                    </div> 
                </form>

                <button class="rounded-btn login">Log in</button>
                <div class="divider">
                        <span>OR</span>
                </div>

                <button type="button" class="btn-google">
                        <div class="google-icon"><img src="{{ asset('images/google.png') }}" style="width: 20px"></div>
                        Continue with Google
                </button>
            </div>
        </div>
    </div>

    <!--pop for forgot password-->
    <div class="pop-bg"> 
        <div class="forgot-pass-container">
            <button class="remove-popup"><i class="fa-solid fa-xmark"></i></button>
            <h1>Forgot Password</h1>
            <p>Enter your email address</p>
            <form>
                <div class="form-group">
                    <input type="email" id="email" name="email" required>
                </div>
            </form>
            <button class="rounded-btn fp-confirm-1">Continue</button>
        </div>
    <!--New password-->

    <div class="forgot-pass-container-2">
        <button class="remove-popup"><i class="fa-solid fa-xmark"></i></button>
        <h1>Forgot Password</h1>
        <p class="validation-error">
            <span class="validation-text">Set a new password to recover your account</span>
            <span class="loading-spinner"></span>
        </p>
        
        <form>
            <div class="form-group">
                <input type="password" id="new_pass" name="new_pass" placeholder="New Password" required>
            </div>
            <div class="form-group">
                <input type="password" id="confirm_pass" name="confirm_pass" placeholder="Confirm Password"  required>
            </div>
        </form>
        <button class="rounded-btn fp-confirm-2">Save Password</button>
    </div>

    <!--Confirmation-->
    <div class="forgot-pass-container-3">
        <i class="fa-solid fa-circle-check fa-2xl" style="color: #707af2; font-size:80px; padding: 2px;"></i>
        <h1>Password Updated Successfully!</h1> 
    </div>
    
    </div>

    <!--Popup for continue with google-->
    <div class="continue-google-popup">
        <div class="google-form">
            <div class="google-text-content">
                <div class="google-icon-large"><img src="{{ asset('images/google.png') }}" style="width: 40px"></div> 
                <h1>Sign in</h1>
                <p>Use your google account</p>               
            </div>
            <div class="google-input-field">
                <div class="remove-google-popup-container">
                    <button class="remove-google-popup"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <form>
                    <div class="form-group">
                        <input type="email" id="googleEmail" name="email" required>
                    </div>
                </form>
                <div class="btn-right">
                    <button class="rounded-btn google-confirm-1">Continue</button>      
                </div>          
            </div>
        </div>
    </div>

    </div>
    <script src="{{ asset('js/loginscript.js') }}"></script>
</body>
</html>