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

            $sql= "select * from user where email = '$email' and password = '$dec_pass'";
            $result = mysqli_query($this -> connection, $sql);
            while ($row1 = mysqli_fetch_array($result)) {
                $name = $row1['name'];
            }
                
            if($count == 1){  
                $_SESSION['name'] = $name; 
                $_SESSION['email'] = $email; 
                header("location: ../welcome.php");
            }else{  
                echo("LOGIN FAILED! Invalid username or password.");
            }  
        } 
    }
}