<?php
include '../includes/connection.php';
include '../includes/CSS&JS.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title> Instagram &circledast; Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <main id="login">
        <div class="login__column">
            <img src="../assets/images/phoneImage.png" class="login__phone" />
        </div>
        <div class="login__column">
            <div class="login__box">
                <img src="../assets/images/loginLogo.png" class="login__logo" />
                <h4 id="Errmsg"></h4>
                <form class="login__form">
                    <input type="text" name="username" id="user" placeholder="Username" required />
                    <input type="password" name="password" id="pass" placeholder="Password" required />
                    <input type="button" value="Log in" id="loginBtn" disabled onclick="login()" />
                </form>
                <span class="login__divider">or</span>
                <a href="#" class="login__link">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    Log in with Facebook
                </a>
                <a href="#" class="forget_pass_link">Forgot password</a>
            </div>
            <div class="login__box">
                <span>Don't have an account?</span> <a href="signup.php">Sign up</a>
            </div>
            <div class="login__box--transparent">
                <span>Get the app.</span>
                <div class="login__appstores">
                    <img src="../assets/images/ios.png" class="login__appstore" alt="Apple appstore logo"
                        title="Apple appstore logo" />
                    <img src="../assets/images/android.png" class="login__appstore" alt="Android appstore logo"
                        title="Android appstore logo" />
                </div>
            </div>
        </div>
    </main>
    <?php
       include 'partial/footer.php';
       ?>
</body>

</html>
<script src="../assets/js/login.js"></script>