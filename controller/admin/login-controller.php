<?php
require_once '../model/connection.php';
class Login extends DatabaseConnection{
    public function user_check( $email = false, $password = false ){
        session_start();
        if ( $email && $password ) {
            $name;
             
            $dec_pass = md5($password);
              
            // $sql = "select * from user where email = '$email' and password = '$dec_pass'";  
            // echo($sql);
            // $result = mysqli_query($this->connection, $sql);   
            $fields = array(
                'email' => $email,
                'password' => $dec_pass
            );

            $count = $this-> select_query( array('*'), 'user', $fields, 'and');
                
            if($count == 1){  
                header("location: ../dashboard.php");
            }else{  
                echo("LOGIN FAILED! Invalid username or password.");
            }  
        } 
    }
}