<?php
require_once "../model/connection.php";
class Signup extends DatabaseConnection{
    public function signup_check( $name =false, $email = false, $password = false ){
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

    public function update_user( $id = false, $name = false, $email = false, $password = false){
        if( $id ){
            $dec_pass = md5($password);

            $fields = array(
                'name' => $name,
                'email' => $email,
                'password' => $dec_pass,
            );
            $result = $this -> update_query('user', $fields, $id);
            if($result){
                header("location: ../dashboard.php");
            }
        }
    }

    public function get_user_by_ajax( $page_num = false ){
        
        if( $page_num ){
            $formula = ( $page_num - 1) * 3;
            $data = $this -> limit_query( "user", $formula, 3 );
            if( !empty( $data ) ):
                echo '<tbody>';
                foreach( $data as $key => $d ): ?>
                    <tr>
                        <td> <?php echo $key+1 ?> </td>
                        <td> 
                            <div class="td-img-container">
                                <img src="assets/images/IMG_-1.png" alt="">
                                <?php echo $d[ 'name' ]; ?> 
                            </div>
                        </td>

                        <td><?php echo $d['email']; ?></td>
                        <td>
                            <?php 
                                $date = strtotime( $d['created_date'] );
                                echo date( 'd/m/Y', $date );
                            ?>
                        </td>
                        <td><?php echo $d['role']; ?></td>
                        <td class="action-container">
                                <a href="signup.php?id=<?php echo $d['id']; ?>" class="update-btn"><i class="fa-regular fa-gear"></i></a> 
                                <a href="controller/form-action.php?id=<?php echo $d['id']; ?>" class="delete-btn"><i class="fa-solid fa-circle-xmark"></i></a>
                                <!-- <a class="delete-btn"><i class="fa-solid fa-circle-xmark"></i></a> -->
                        </td>
                    </tr>
                <?php endforeach;
                echo '</tbody>';
            endif;           
        }
    }
}