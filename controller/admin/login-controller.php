<?php
require_once '../model/connection.php';
class Login extends DatabaseConnection{
    public function user_check( $email = false, $password = false ){
        if ( $email && $password ) {
            $json_arr = [];
             
            $dec_pass = md5($password);
              
            // $sql = "select * from user where email = '$email' and password = '$dec_pass'";  
            // echo($sql);
            // $result = mysqli_query($this->connection, $sql);   
            $fields = array(
                'email' => $email,
                'password' => $dec_pass
            );

            $data = $this-> select_query( array('*'), 'user', $fields, 'and');
            if(count( $data ) == 1){
                $get_data = $data[0];
                $json_arr = array(
                    'id' => $get_data[ 'id' ],
                    'name' => $get_data['name'],
                    'email' => $get_data['email']
                ); 

                // array ma cookie set
                // convert -> json
                $json_data = json_encode($json_arr);
                setcookie("evit_data",$json_data , time()+60*60*24*365, "/");
                header("location: ../dashboard.php");
            }else{  
                echo("LOGIN FAILED! Invalid username or password.");
                header("Refresh: 5; url= ../index.php");
            }  
        } 
    }
}