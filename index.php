<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
    <script src="https://kit.fontawesome.com/483c49b5ee.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" src="./assets/js/login.js"></script>
    <script type="text/javascript" src="./assets/js/password.js"></script>


    
</head>
<body>
    <div id="message" class="msg hide"></div>

    <div class="main-container">
        <div class="banner-container">
            <img src="./assets/images/logo.png" class="logo-img" alt="">
            <div class="text-container">
                <h1 class="heading-text text">Welcome to eaglevision it</h1>
                <p class="text p-text banner-p">Don't have an account?<a href="signup.php" class="link-text">Create yours now</a></p>
            </div>
        </div>

        <div class="form-container login-form">
            <h1 class="form-heading login-font-color">Share your awesomeness</h1>

            <form action="controller/form-action.php" method="post" class="login inner-form" id="form-submit">
                <h2 class="form-heading2 login-font-color">Login</h2>

                <div class="input-container">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="email">
                </div>

                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="password" placeholder="Must be at least 6 characters">
                    
                    <span class="eye-container" id="eye-click"> 
                        <i class="fa-solid fa-eye-slash" id="eye"></i> 
                    </span>
                </div>

                <button class="button" type="submit" name="login_form" value="submit">LOGIN</button>

            </form>

            <div class="footer">
                <p class="footer-para login-font-color">Copyright © 2022 eaglevisionit.com Terms & Conditions | Privacy policy</p>
            </div>
        </div>
    </div>
</body>
</html>