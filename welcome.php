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
        }

        .welcome-heading{
            text-align: center;
            display: block;
        }

        .welcome-text{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="welcome-heading">Welcome</h1>
    <div class="welcome-text">
        <h2>Name: <?php  echo $_SESSION['name']  ?></h2>
        <h2>Email: <?php  echo $_SESSION['email']  ?></h2>
    </div>
</body>
</html>