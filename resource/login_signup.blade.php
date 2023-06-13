<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login page</title>
    <link rel="stylesheet" href="css/login_signup.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <!-- Defining headers options -->
    <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#">Help</a>
        </nav>
       
    </header>
    <!-- LOGIN FORM CREATION -->
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='bx bxl-xing'></i>Bro Codify</h2>
            <div class="text-item">
                <h2>Welcome! <br><span>
                    To Our Community
                </span></h2>
                <p>This web application is a user-friendly online platform designed to offers a comprehensive range of educational resources and tools. It provides a seamless communication channel for students and teachers to interact, ask questions, and receive feedback.</p>
               <div class="social-icon">
                    <a href="https://www.facebook.com/brocodify" target="_main"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/brocodify/" target="_main"><i class='bx bxl-instagram'></i></a>
                    <a href="https://t.me/brocodify" target="_main"><i class='bx bxl-telegram'></i></a>
                    <a href="#" target="_main"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">

            <form action="login.php" method="Post">       

                <h2>Login</h2>
                
                <div class="input-box">
                    <!-- Taking emial from user -->
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="Email" name="mail" placeholder="Email" required>
                    <label for=""></label><br>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                    <input type="Password" name="password" placeholder="Password" required>
                    <label for=""></label>
                </div>
                <div class="rememberme">
                    <input type="checkbox">
                    <label for="Remember me">&nbsp;Remember Me</label>
                </div>
                <button class="btn">Log In</button>
                <div class="Forget">
                    <a href="forget_password.html" class="Forget-link">Forget your password?</a>
                </div>
                <center>
                <h5>OR</h5>
            </center>
                <div class="register">
                    <p>Don't have an account? <a href="#" class="register-link">Sign up </a></p>
                </div>


                </form>
            </div>
            <div class="form-box register">

                <form action="sign_up.php" method="POST">
                    <h2>Sign up</h2>
                    
                    <div class="input-box">
                        <!-- Taking emial from user -->
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" class="username" name="username" placeholder="Username" required>
                        <label for=""></label><br>
                    </div>
                    <div class="input-box">
                        <!-- Taking emial from user -->
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="Email" name="email" class="mail" placeholder="Email" required>
                        <label for=""></label><br>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="Password" name="password" class="password"placeholder="Password" required>
                        <label for=""></label>
                    </div>
                    <div class="input-box">
                        <!-- Taking emial from user -->
                        <span class="icon"><i class='bx bxs-phone'></i></i></span>
                        <input type="Phonenumber" name="phone_number" class="number"placeholder="Phone number" required>
                        <label for=""></label><br>
                    </div>
                    <div class="rememberme">
                        <input type="checkbox">
                        <label for="Remember me">&nbsp;I agree all terms and conditions</label>
                    </div>
                    <button  type="submit" class="btn">Sign Up</button>
                    <div class="Forget">
                       
                    </div>
                    <center>
                    <h5>OR</h5>
                </center>
                    <div class="register">
                        <p>Already have an Account? <a href="#" class="login-link">Sign In </a></p>
                    </div>
    
    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/login_signup.js"></script>
</body>
</html>
