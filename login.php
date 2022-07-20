<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="main-container">
        <div class="banner-container">
            <img src="./assets/images/logo.png" class="logo-img" alt="">
            <div class="text-container">
                <h1 class="heading-text text">Welcome to eaglevision it</h1>
                <p class="text p-text">Don't have an account?<a href="signup.php" class="link-text">Create yours now</a></p>
            </div>
        </div>

        <div class="form-container login-form">
            <h1 class="form-heading login-font-color">Share your awesomeness</h1>

            <span class="message"> </span>

            <form action="" method="post" class="inner-form">
                <h2 class="form-heading2 login-font-color">Login</h2>

                <label for="email">Email</label>
                <input type="text" name="email" required>

                <label for="password">Password</label>
                <input type="password" name="password" required placeholder="Must be at least 6 characters">

                <div class="checkbox-container">
                    <input type="checkbox" class="checkbox">
                    <p class="p-text">Sign up for email updates.</p>
                </div>

                <button class="button" type="submit" name="submit" value="submit">SIGN UP</button>

            </form>

            <div class="footer">
                <p class="footer-para login-font-color">Copyright © 2022 eaglevisionit.com Terms & Conditions | Privacy policy</p>
            </div>
        </div>
    </div>
</body>
</html>