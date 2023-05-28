<?php

require_once 'db.php';

// add new user

if(isset($_POST['do-register'])){

    $displayName = $_POST['display-name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passConf = $_POST['pass-conf'];
    


    $check_username = mysqli_query($db,"SELECT * FROM users WHERE username='$username'");

    if(mysqli_num_rows($check_username) > 0){
        echo 'کاربر با این اسم ثبت نام کرده';
    }else{

        if($password != $passConf){
            echo 'رمز عبور و تکرار ان با هم برابر نیستند';
        }else{


        $insert = mysqli_query($db ,"INSERT INTO users (display_name, username ,password) VALUES ('$displayName','$username','$password')");

        if($insert){
        header("Location: ../login.php");
        }else{
            echo 'error';
        };

        };
    };
};