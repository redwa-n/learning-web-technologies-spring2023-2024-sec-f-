<?php
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    require_once('../model/userModel.php');

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null usernamepassword";
    }else {

        $status = login($username, $password);

        if($status){
            setcookie('flag', 'true', time()+3000, '/');
            header('location: ../view/dashboardCustomer.php');
        }else{
            echo "invalid User!";
        }    
    }
?>