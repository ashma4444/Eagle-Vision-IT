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
                $db = new DatabaseConnection();

                $sql = "select * from user";
                $query = mysqli_query($db -> connection, $sql);

                while($res = mysqli_fetch_array($query)){
            ?>

            <tr>
                <td> <?php echo $res['id']; ?> </td>
                <td> <?php echo $res['name']; ?> </td>
                <td><?php echo $res['email']; ?></td>
                <td>
                    <button class="button"><a href="controller/form-action.php?deleteid=<?php echo $res['id']; ?>"> Delete</a></button>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>

    </div>
</body>
</html>