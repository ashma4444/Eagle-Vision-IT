<?php
require_once '../model/connection.php';

class Delete extends DatabaseConnection{
    public function delete_user( $id = false ){
        if( $id ){
            // $sql = "delete from `user` where id=$id";
            // $result =  mysqli_query($this -> connection, $sql);

            $result = $this -> delete_query('user', $id);
            if($result){
                header("location: ../dashboard.php");
            }
        }
    }
}




