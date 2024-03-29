<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once('../model/userModel.php');

    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == "" || $email == ""){
        echo "null username/password/email";
    } else {
        $user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
        $status = createUser($user);
        if($status){
            header('location: ../view/login.php');
        } else {
            echo "DB error! Please try again";
        }
    }
?>
