<?php  
include 'admin/signup-controller.php';
if( isset( $_POST[ 'type' ] ) ){
    $page_num = $_POST['page_no'];
    $signup = new Signup();
    $signup->get_user_by_ajax($page_num);
}


