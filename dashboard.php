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
        <div class="side-heading side-heading-up">
            <i class="fa-regular fa-circle-plus"></i>
            <h2>EVIT Dashboard</h2>
        </div>

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
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date Created</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>

                <?php
                    $db = new DatabaseConnection();

                    $sql = "select * from user";
                    $query = mysqli_query($db -> connection, $sql);

                    while($res = mysqli_fetch_array($query)){
                 ?>

            <tr>
                <td> <?php echo $res['id']; ?> </td>
                <td> <?php echo $res['name']; ?> </td>
                <td> <?php echo $res['created_date']; ?> </td>
                <td><?php echo $res['role']; ?></td>
                <!-- <td>
                    <button class="button"><a href="controller/form-action.php?deleteid=<?php echo $res['id']; ?>"> Delete</a></button>
                </td> -->
                <td class="action-container">
                        <a href=""><i class="fa-regular fa-gear"></i></a> 
                        <a href="controller/form-action.php?deleteid=<?php echo $res['id']; ?>"><i class="fa-solid fa-circle-xmark"></i></a>
                </td>
            </tr>
            <?php
            }
            ?>
            </table>
        </div>
    </div>
</body>
</html>
