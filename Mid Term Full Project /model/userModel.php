<?php 
require_once('db.php');

function login($username, $password){
    $con = dbConnection();
    $sql = "SELECT * FROM user_kr WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    } else {
        return false;
    }
}

function getAllUser(){
    $con = dbConnection();
    $sql = "SELECT * FROM user_kr";
    $result = mysqli_query($con, $sql);
    $users = [];

    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }

    return $users;
}

function getUserById($id){

}

function createUser($user){
    $con = dbConnection();
    $username = $user['username'];
    $email = $user['email'];
    $password = $user['password'];
    $sql = "INSERT INTO user_kr (username, email, password) VALUES ('$username', '$email', '$password')";
    if(mysqli_query($con, $sql)){
        return true;
    } else {
        return false;
    }
}

function deleteUser($id){

}

function updateUser($user){

}
?>
