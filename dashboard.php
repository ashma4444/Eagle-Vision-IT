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
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>

</head>
<body>
    <div class="dashboard-container">
        <table>
            <tr>
                <th>Id</th>   
                <th>Name</th>
                <th>Email</th>
                <th>Delete</th>
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
                <td>
                    <button><a href="delete.php"></a></button>
                    <?php echo $res['email']; ?>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>

    </div>
</body>
</html>