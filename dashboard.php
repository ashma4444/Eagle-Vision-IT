<?php 
    session_start();
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
    <style>
        body{
            background-image:linear-gradient(250deg, rgba(239,41,94,1) 38%, rgba(239,132,41,1) 100%);
            font-family: 'Montserrat', sans-serif;
            background-repeat: no-repeat;
            height: 97vh; 
            display: flex;
            flex-direction:column;
            align-items: center;
            justify-content: center;
        }

        .welcome-heading{
            text-align: center;
            display: block;
        }

        .dashboard-container{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="welcome-heading">Dashboard</h1>
    <div class="dashboard-container">
        <table>
            <tr>
                <th>Id</th>   
                <th>Name</th>
                <th>Email</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>

            <?php
                $servername = "localhost";
                $username = "root";      
                $password = "";            
                $dbname = "evit"; 
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "select * from user";
                $query = mysqli_query($conn, $sql);

                while($res = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td> <?php echo $res['id']; ?> </td>
                <td> <?php echo $res['name']; ?> </td>
                <td><?php echo $res['email']; ?></td>
            </tr>
            <?php
                }
            ?>
        </table>

    </div>
</body>
</html>