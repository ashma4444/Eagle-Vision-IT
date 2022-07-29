<?php require_once "views/header.php";
require_once 'model/connection.php';
$is_update = isset( $_GET[ 'id' ] ) && '' != $_GET[ 'id' ] ? true : false;
?>

<body class="form-body">
    <div id="message" class="msg hide"></div>

    <div class="main-container">
        <div class="banner-container">
            <img src="./assets/images/logo.png" class="logo-img" alt="">
            <div class="text-container">
                <h1 class="heading-text text">Welcome to eaglevision it</h1>
                <p class="text p-text banner-p">Already Have an account?<a href="index.php" class="link-text">Login Now</a></p>
            </div>
        </div>

        <div class="form-container">
            <h1 class="form-heading">Share your awesomeness</h1>

            <?php
                $db = new DatabaseConnection();

                if(isset($_GET['id'])):
                    $id= $_GET['id'];
                    $fields = array(
                        'id' => $id,
                    );
                    $data = $db -> select_query( array('*'), 'user', $fields);
                    if( !empty( $data ) ){
                        $data = $data[0];
                }
                endif; ?>
                <form action="controller/form-action.php" method="post" class="signup inner-form">
                    <?php if( $is_update ){ ?>
                        <input type="hidden" name="id" value="<?php echo $data[ 'id' ]; ?>">
                    <?php } ?>                        

                    <h2 class="form-heading2"><?php echo $is_update ? 'Update' : 'Signup'; ?></h2>
                    <p class="p-text form-para">Already Have an account?<a href="index.php" class="form-link">Login Now</a></p>

                    <div class="input-container">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" class="name" value="<?php echo $is_update ? $data[ 'name' ] : ''; ?>">
                    </div>


                    <div class="input-container">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="email" value="<?php echo $is_update ? $data[ 'email' ] : ''; ?>">
                    </div>

                    <div class="input-container">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="password" placeholder="Must be at least 6 characters">
                        
                        <span class="eye-container" id="eye-click"> 
                            <i class="fa-solid fa-eye-slash" id="eye"></i> 
                        </span>
                    </div>

                    <div class="checkbox-container">
                        <input type="checkbox" class="checkbox">
                        <p class="p-text">Sign up for email updates.</p>
                    </div>

                    <button class="button" type="submit" name="<?php echo $is_update ? 'update_form' : 'signup_form' ?>" value="submit">
                        <?php echo $is_update ? 'UPDATE' : 'SIGN UP'; ?>
                    </button>

                    <p class="center-text">By continuing, you agree to accept our Privacy Policy & Terms of Service.</p>
                </form>
                        <?php       
            ?>

            <div class="footer">
                <p class="footer-para">Copyright © 2022 eaglevisionit.com Terms & Conditions | Privacy policy</p>
            </div>
        </div>
    </div>

    <a href="index.php">
        <img src="assets/images/arrow.png" alt="" class="arrow-img-signup arrow-img">
    </a>
</body>
<?php require_once "views/footer.php"?>


