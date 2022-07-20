<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
    <script type="text/javascript" src="./assets/js/signup.js"></script>

</head>

<body>
    <div class="main-container">
        <div class="banner-container">
            <img src="./assets/images/logo.png" class="logo-img" alt="">
            <div class="text-container">
                <h1 class="heading-text text">Welcome to eaglevision it</h1>
                <p class="text p-text">Already Have an account?<a href="login.php" class="link-text">Login Now</a></p>
            </div>
        </div>

        <div class="form-container">
            <h1 class="form-heading">Share your awesomeness</h1>

            <div id="message" style="color: #cc0000; font-size: 14px; text-align:center; margin-top: 15px"> </div>
            <!-- <div class="err-msg" id="message"></div> -->

            <form action="" method="post" class="inner-form" onsubmit="return validation()" >
                <h2 class="form-heading2">Sign Up</h2>
                <p class="p-text form-para">Already Have an account?<a href="#" class="form-link">Login Now</a></p>

                <label for="name">Full Name</label>
                <input type="text" name="name" id="name">

                <label for="email">Email</label>
                <input type="text" name="email" id="email">

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Must be at least 6 characters">

                <div class="checkbox-container">
                    <input type="checkbox" class="checkbox">
                    <p class="p-text">Sign up for email updates.</p>
                </div>

                <button class="button" type="submit" name="submit" value="submit">SIGN UP</button>

                <p class="center-text">By continuing, you agree to accept our Privacy Policy & Terms of Service.</p>
            </form>
            <div class="footer">
                <p class="footer-para">Copyright © 2022 eaglevisionit.com Terms & Conditions | Privacy policy</p>
            </div>
        </div>
    </div>
</body>
</html>