<?php
include 'admin/login-controller.php';
include 'admin/signup-controller.php';
include 'admin/delete-controller.php';

if (isset($_POST['login_form'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = new Login();
    $login->user_check( $email, $password );
}

if (isset($_POST['signup_form'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $signup = new Signup();
    $signup->signup_check( $name, $email, $password );
}

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $del = new Delete();
    $del -> delete_user($id);
}