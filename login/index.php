<!-- DOCTYPE html -->
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/fc0bcca8a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../resources/css/index.css">
        <title>Welcome to BeerCo!</title>
    </head>
        <body>
            <!-- this will create a container surrounding the whole page -->
            <div class="container" id="container">
                <!-- sign up container -->
                <div class="form-container sign-up-container">
                    <!-- form -->
                    <form action="register.php">
                        <h1>Create Account</h1>
                        <span>Use Your Email For Registration</span>
                        <input type="text" placeholder="Name" required>
                        <input type="email" placeholder="Email" required>
                        <input type="password" placeholder="Password" required>
                        <button>Sign Up</button>
                    </form>
                </div>

                <!-- Sign in Container -->
                <div class="form-container sign-in-container">
                    <form action="login.php">
                        <h1>Sign In</h1>
                        <div class="social-container">
                            <!-- let's create 2 social icon: facebook, & linked-in... -->
                            <a href="https://facebook.com" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://linkedin.com" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your Account</span>
                        <input type="email" placeholder="Email" required>
                        <input type="password" placeholder="Password" required>
                        <a>Forgot Your Password?</a>
                        <button>Sign In</button>
                    </form>
                </div>

                <!-- Overlay container -->
                <div class="overlay-container">
                    <!-- another container -->
                    <div class="overlay">
                        <!-- another container -->

                        <!-- START REMOVE? -->
                        <div class="overlay-panel overlay-left">
                            <h1>Welcome Back!</h1>
                            <p>Enter your personal details and start the journey with us</p>
                            <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <!-- END REMOVE? -->

                        <div class="overlay-panel overlay-right">
                            <h1>Hello Friend!</h1>
                            <p>To stay connected please login with your personal account</p>
                            <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        <script src="main.js"></script>
        </body>
</html>