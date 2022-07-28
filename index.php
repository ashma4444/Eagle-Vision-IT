<?php require_once "views/header.php"?>
<body class="form-body">
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

    <a href="signup.php">
        <img src="assets/images/arrow.png" alt="" class="arrow-img-login arrow-img">
    </a>
</body>
<?php require_once "views/footer.php"?>
