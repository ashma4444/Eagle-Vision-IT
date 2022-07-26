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


        public function select_query($field_arr, $tablename, $fields=false, $opr=false){
            // $sql = "select * from user where email = '$email' and password = '$dec_pass'";  
            $data = [];

            $sql = 'select ';
            if(count($field_arr) > 1){
                foreach($field_arr as $value){
                    $sql .= $value. ',';
                }
                $sql = rtrim( $sql, ',');
            }

            else{
                $sql .= $field_arr[0];
            }

            $sql .= ' from ' .$tablename;
            
            if( $fields ){
                $sql .= ' where ';
                foreach( $fields as $key => $value ){
                    $sql .= $key .'="' . $value .'" '.$opr.' ';
                }  
            }

            $sql = rtrim( $sql, ' '.$opr );
            // echo $sql; die;
            
            $result = mysqli_query($this->connection, $sql);   

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            return $data;
        }


        public function delete_query( $tablename, $id ){
            $sql = "delete from $tablename where id=$id";
            $result =  mysqli_query($this -> connection, $sql);
            return $result;
        }

        public function update_query($tablename, $fields, $id){
            $sql = " update " .$tablename ." set ";
            // name='$name', email='$email', password='$dec_pass' where id=$id ";
            foreach( $fields as $key => $value ){
                $sql .= $key .'="' . $value .'",';
            }  
            $sql = rtrim( $sql, ',');
            $sql .= " where id=".$id;
            // echo $sql; die;
            $result =  mysqli_query($this -> connection, $sql);   
            
            return $result;
        }

        public function limit_query($tablename, $offset, $limit){
            // $sql = "select * from student limit {$offset}, {$limit}";
            $sql = "select * from " .$tablename ." limit " .$offset .", " .$limit;
            $result = mysqli_query($this -> connection, $sql);  
            return $result;
        }
    }
?>