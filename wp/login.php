<?php
require('db_conn.php');
session_start();
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $email = stripcslashes($email);
    $pass = stripcslashes($pass);
    $email = mysqli_real_escape_string($connect,$email);
    $pass = mysqli_real_escape_string($connect,$pass);




    $_SESSION ['user']=$email;

    if ($email == ''  ||$pass== '') {
        echo 'One of the form field is missing';
    } else {

        $row = mysqli_query($connect , "SELECT  * FROM admin WHERE 
        uname = '$email' AND pass = '$pass'" ); 

        $result = mysqli_fetch_assoc($row);

        if(empty($result)){
            echo "Invalid Email or Password";
        }
        else{
            
            header('Location: index.php');
        }

    }
}
