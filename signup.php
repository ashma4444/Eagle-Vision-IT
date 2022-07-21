<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/483c49b5ee.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="./assets/js/signup.js"></script>
</head>

<body>
    <div class="main-container">
        <div class="banner-container">
            <img src="./assets/images/logo.png" class="logo-img" alt="">
            <div class="text-container">
                <h1 class="heading-text text">Welcome to eaglevision it</h1>
                <p class="text p-text">Already Have an account?<a href="index.php" class="link-text">Login Now</a></p>
            </div>
        </div>

        <div class="form-container">
            <h1 class="form-heading">Share your awesomeness</h1>

            <div id="message" style="color: #cc0000; font-size: 14px; text-align:center; margin-top: 15px"> </div>
            <!-- <div class="err-msg" id="message"></div> -->

            <!-- <form action="controller/signup_validation.php" method="post" class="inner-form"> -->
            <form action="controller/form-action.php" method="post" class="signup inner-form">
                <h2 class="form-heading2">Sign Up</h2>
                <p class="p-text form-para">Already Have an account?<a href="index.php" class="form-link">Login Now</a></p>

                <div class="input-container">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name">
                </div>


                <div class="input-container">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>

                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Must be at least 6 characters">
                    
                    <span class="eye-container"> 
                        <i class="fa-solid fa-eye-slash" id="closed-eye"></i> 
                        <i class="fa-solid fa-eye" id="open-eye"></i>
                    </span>
                </div>

                <div class="checkbox-container">
                    <input type="checkbox" class="checkbox">
                    <p class="p-text">Sign up for email updates.</p>
                </div>

                <button class="button" type="submit" name="signup_form" value="submit">SIGN UP</button>

                <p class="center-text">By continuing, you agree to accept our Privacy Policy & Terms of Service.</p>
            </form>


            <div class="footer">
                <p class="footer-para">Copyright © 2022 eaglevisionit.com Terms & Conditions | Privacy policy</p>
            </div>
        </div>
    </div>
</body>

<script>
    $("#closed-eye").click(function(){
        $("#closed-eye").hide();
        $("#open-eye").show();
        $("#password").attr('type', 'text');
    });

    $("#open-eye").click(function(){
        $("#closed-eye").show();
        $("#open-eye").hide();
        $("#password").attr('type', 'password');
    });
</script>
</html>

