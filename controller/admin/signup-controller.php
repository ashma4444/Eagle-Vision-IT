<?php
require_once "../model/connection.php";
class Signup extends DatabaseConnection{
    public function signup_check($name =false, $email = false, $password = false){
        if ($name && $email && $password ) {
            $validation = true;
            // hashing password
            // $secured_pass = password_hash($password, PASSWORD_DEFAULT);
            $enc_pass = md5($password);

            if(empty($name) || empty($email) || empty($password)){
                $validation = false;
            }
            else{
                if(strlen($password) <6){
                    $validation = false; 
                }
            }

            if($validation == true){
                $fields = array(
                    'name' => $name,
                    'email' => $email,
                    'password' => $enc_pass,
                    'role' => "Admin"
                    // 'created_date' => CONVERT(VARCHAR(10), getdate(), 111)
                );
                $this->insert_data( 'user', $fields );
                header("location: ../index.php");
            }

            $this->connection->close(); 
        }
    }
}