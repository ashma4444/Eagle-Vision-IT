<?php 
    class DatabaseConnection{
        public $connection;

        public function __construct(){
            $servername = "localhost";
            $username = "root";      
            $password = "";            
            $dbname = "evit"; 
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
    
            $this->connection = $conn;
        }

        public function insert_data( $tablename, $fields ){
            // $sql = "INSERT INTO $tablename (`name`, `email`, `password`) VALUES ('$name', '$email','$password')";
            // INSERT INTO	$tablename SET name = 'Kim', relation= 'good';

            $sql = 'INSERT INTO ' . $tablename . ' SET ';
            foreach( $fields as $key => $field ){
                $sql .= $key . '= "' . $field;
                $sql .= '",';
            }
            $sql = rtrim( $sql, ',' );
            $result = $this->connection->query($sql);
        }


        public function select_query($field_arr, $tablename, $fields, $opr){
            // $sql = "select * from user where email = '$email' and password = '$dec_pass'";  
            $sql = 'select ';
            if(count($field_arr) > 1){
                // for($i = 0; $i < count($field_arr); $i++){
                //     $sql .= $field_arr[$i]. ',';
                // }

                foreach($field_arr as $value){
                    $sql .= $value. ',';
                }
                $sql = rtrim( $sql, ',');
            }

            else{
                $sql .= $field_arr[0];
            }

            $sql .= ' from ' .$tablename. ' where ';
            
            foreach( $fields as $key => $value ){
                $sql .= $key .'="' . $value .'" '.$opr.' ';
            }  

            $sql = rtrim( $sql, ' '.$opr );
            // echo $sql; die;
            $result = mysqli_query($this->connection, $sql);   


            $count = mysqli_num_rows($result);  
    
            // // echo($count);
            if($count == 1){  
                echo "<h4><center> Login successful </center></h4>";  
            }  
            else{  
                echo "<h4> <center> Login failed. Invalid email or password. </center> </h4>";  
            }  
        }
    }


?>