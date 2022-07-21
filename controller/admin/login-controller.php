<?php
require_once '../model/connection.php';
class Login extends DatabaseConnection{
    public function user_check( $email = false, $password = false ){
        if ( $email && $password ) {
             
            $dec_pass = md5($password);
              
            // $sql = "select * from user where email = '$email' and password = '$dec_pass'";  
            // echo($sql);
            // $result = mysqli_query($this->connection, $sql);   
            $fields = array(
                'email' => $email,
                'password' => $dec_pass
            );

            $this-> select_query( array('id', 'name'), 'user', $fields, 'and');

            // $count = mysqli_num_rows($result);  
    
            // // echo($count);
            // if($count == 1){  
            //     echo "<h4><center> Login successful </center></h4>";  
            // }  
            // else{  
            //     echo "<h4> <center> Login failed. Invalid email or password. </center> </h4>";  
            // }  
        } 
    }
}