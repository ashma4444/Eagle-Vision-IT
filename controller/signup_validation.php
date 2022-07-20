<?php
include "../model/connection.php";

  if (isset($_POST['submit'])) {
    $validation = true;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // hashing password
    $secured_pass = password_hash($password, PASSWORD_DEFAULT);


    if(empty($name) || empty($email) || empty($password)){
        $validation = false;
    }
    else{
        if(strlen($password) <6){
            $validation = false; 
        }
    }

    if($validation == true){
        $sql = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email','$secured_pass')";
        $result = $conn->query($sql);
        header("location: ../login.php");
    }

    $conn->close(); 
  }
?>