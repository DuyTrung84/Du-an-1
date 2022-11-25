<?php 
    session_start();

    if( isset( $_SESSION['name'] )){
        unset( $_SESSION['email']);
    }

    header('location:dangnhap.php');

?>