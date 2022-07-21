<?php 
    session_start();      
    include('conn.php'); 
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];  
        $password = $_POST['password'];  

        $dec_pass = md5($password);
          
        $sql = "select * from user where email = '$email' and password = '$dec_pass'";  
        // echo($sql);
        $result = mysqli_query($conn, $sql);   
        $count = mysqli_num_rows($result);  

        // echo($count);
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid email or password.</h1>";  
        }  
    } 
    $conn->close(); 
?>  









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
    <script src="https://kit.fontawesome.com/483c49b5ee.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
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

            <form action="" method="post" class="login inner-form">
                <h2 class="form-heading2 login-font-color">Login</h2>

                <div id="message" style="color: #cc0000; font-size: 14px; text-align:center; margin-top: 15px"> </div>

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

                <button class="button" type="submit" name="submit" value="submit">LOGIN</button>

            </form>

            <div class="footer">
                <p class="footer-para login-font-color">Copyright © 2022 eaglevisionit.com Terms & Conditions | Privacy policy</p>
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