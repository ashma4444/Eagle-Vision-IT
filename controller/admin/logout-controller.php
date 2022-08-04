<?php
	session_start();

    if (isset($_COOKIE["evit_data"])){
        unset($_COOKIE["evit_data"]);
        setcookie('evit_data', '', time() + 5, '/');
    }

    // $json_data = $_COOKIE["evit_data"];

    // var_dump($json_data);
    // $decoded_json = json_decode($json_data, false);
    // // var_dump($decoded_json);
 
	// if (isset($_COOKIE["user"]) AND isset($_COOKIE["pass"])){
	// 	setcookie("user", '', time() - (3600));
	// 	setcookie("pass", '', time() - (3600));
	// }
 
	header('location:../../index.php');
?>