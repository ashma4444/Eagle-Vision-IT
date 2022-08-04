<?php
session_start();
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

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $del = new Delete();
    $del -> delete_user($id);
}

if (isset($_POST['update_form'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $update = new Signup();
    $update -> update_user($id, $name, $email, $password);
}