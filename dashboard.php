<?php 
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
            <p class="dashboard-p">User_name</p>
            <i class="fa-solid fa-angle-down"></i>
        </div-nav-info>
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

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $db = new DatabaseConnection();
                        $data = $db -> limit_query("user", 0, 3);
                        if( !empty( $data ) ):
                            foreach( $data as $key => $d ): ?>
                                <tr>
                                    <td> <?php echo $key+1 ?> </td>
                                    <td> 
                                        <div class="td-img-container">
                                            <img src="assets/images/IMG_-1.png" alt="">
                                            <?php echo $d[ 'name' ]; ?> 
                                        </div>
                                    </td>

                                    <td><?php echo $d['email']; ?></td>
                                    <td>
                                        <?php 
                                            $date = strtotime( $d['created_date'] );
                                            echo date( 'd/m/Y', $date );
                                        ?>
                                    </td>
                                    <td><?php echo $d['role']; ?></td>
                                    <td class="action-container">
                                            <a href="signup.php?id=<?php echo $d['id']; ?>" class="update-btn"><i class="fa-regular fa-gear"></i></a> 
                                            <a href="controller/form-action.php?id=<?php echo $d['id']; ?>" class="delete-btn"><i class="fa-solid fa-circle-xmark"></i></a>
                                            <!-- <a class="delete-btn"><i class="fa-solid fa-circle-xmark"></i></a> -->
                                    </td>
                                </tr>
                            <?php endforeach;
                        endif;           
                    ?>
                </tbody>
            </table>


            <div class="pagination-container">
            <?php 
                $pagination_data = $db -> select_query(array("*"), "user" );
                for($i = 1; $i <= ceil( count( $pagination_data )/3 ); $i++ ){
                    $active = $i== 1 ? 'active': ''; ?>
                    <a href="" class="<?php echo $active; ?>" id="<?php echo $i ?>"> <?php echo $i ?> </a>  
                <?php } 
            ?>
        </div>
        </div>


    </div>
</body>
</html>
