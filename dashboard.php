<?php 
// session_start();
    require_once 'model/connection.php';
?>

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
    <script type="text/javascript" src="./assets/js/dashboard.js"></script>
</head>
<?php 
    if( !isset( $_COOKIE[ 'evit_data' ] ) ){
        header('location: index.php' );
    }
    if( isset( $_GET[ 'page' ] ) ){
        $page = $_GET[ 'page' ];
    }else{
        $page = 'index';
    }
?>
<body class="dashboard-body">
    <nav>
        <a class="ham-span">
            <i class="fa-solid fa-bars"></i>
        </a>
        <!-- <div class="side-heading side-heading-up">
            <i class="fa-regular fa-circle-plus"></i>
            <h2>EVIT Dashboard</h2>
        </div> -->

        <div class="searchbox">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search">
        </div>

        <div class="nav-info">
            
            <div class="dropdown">
                <div class="nav-info-container">
                    <p class="dashboard-p">
                        <?php 
                            $user_loggedin = $_COOKIE["evit_data"];
                            $user_loggedin = json_decode($user_loggedin, true);
                            echo $user_loggedin[ 'name' ];
                            // echo $decoded_json[0];
                        ?>
                    </p> 

                    <i class="fa-solid fa-angle-down"></i>
                </div>
                <div class="dropdown-content">
                    <a href="controller/admin/logout-controller.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="dashboard-container">
        <div class="side-bar">
            <a class="ham-span">
                <i class="fa-solid fa-bars"></i>
            </a>
            <div class="side-heading side-heading-up common-db-container">
                <i class="fa-regular fa-circle-plus"></i>
                <h2>EVIT Dashboard</h2>
            </div>
            <div class="side-list">
                <ul>
                    <li>
                        <a href="">
                            <div class="common-db-container">
                                <i class="fa-regular fa-house"></i>
                                <p class="dashboard-li">Home</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="common-db-container">
                                <i class="fa-regular fa-chart-simple"></i>
                                <p class="dashboard-li">Dashboard</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="common-db-container">
                                <i class="fa-regular fa-user"></i>
                                <p class="dashboard-li">Users</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="common-db-container">
                                <i class="fa-regular fa-gear"></i>
                                <p class="dashboard-li">Setting</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div>
            <?php 
                $path = __DIR__ . '/views/dashboard/' . $page . '.php';
                if( file_exists( $path ) ){
                    include( $path ); 
                }
            ?>
        </div>
</body>
</html>
