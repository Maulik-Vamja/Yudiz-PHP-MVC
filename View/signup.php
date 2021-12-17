<?php
include '../includes/connection.php';
include '../includes/CSS&JS.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Sign up &circledast; Instagram</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Vietgram, like Instagram but with Pho" />
    </head>
    <body>
        <main id="login">
            <div class="login__column">
                <img src="../assets/images/phoneImage.png" class="login__phone" />
            </div>
            <div class="login__column">
                <div class="login__box">
                    <img src="../assets/images/loginLogo.png" class="login__logo" />
                    <h3>Sign up to see photos and videos from your friends.</h3>
                    <a href="#" class="login__link">
                        <i class="fa fa-facebook-official"></i>
                        Log in with Facebook
                    </a>
                    <span class="login__divider">or</span>
                    <form class="login__form">
                        <input type="text" id="mobile" placeholder="Mobile number or Email address" required />
                        <p class="mobileMsg"></p>
                        <input type="text" id="name" placeholder="FullName" required />
                        <p class="nameMsg"></p>
                        <input type="text" id="username" placeholder="Username" required />
                        <p class="usernameMsg"></p>
                        <input type="text" id="password" placeholder="Password" required />
                        <h6 class="suggetion">Suggetion:Strong password contains Upparcase character,Lowercase Character,special character(@ # $ % ^ & *),numbers.</h6>
                        <p class="passMsg"></p>
                        <input type="button" value="Sign Up" class="signupBtn" disabled onclick="signup()"/>
                    </form>
                </div>
                <div class="login__box">
                    <span>Already have an account?</span> <a href="login.php">Log in</a>
                </div>
                <div class="login__box--transparent">
                    <span>Get the app.</span>
                    <div class="login__appstores">
                        <img src="../assets/images/ios.png" class="login__appstore" alt="Apple appstore logo" title="Apple appstore logo" />
                        <img src="../assets/images/android.png" class="login__appstore" alt="Android appstore logo" title="Android appstore logo" />
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer__column">
                <nav class="footer__nav">
                    <ul class="footer__list">
                        <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__column">
                <span class="footer__copyright">© 2017 Vietgram</span>
            </div>
        </footer>
    </body>
</html>
<script src="../assets/js/signup.js"></script>