<?php 

include "connection.php";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($name) || empty($email) || empty($password)){
        echo "Empty fields found";
    }

    // $sql = "INSERT INTO `users` VALUES ('$name', '$email','$password')";
    // $result = $conn->query($sql);
    $conn->close(); 
  }

?>