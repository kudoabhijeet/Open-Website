<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "open";
$mysqli = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($mysqli->connect_error){
 die("Connection failed:" . $mysqli->connect_error);
}

    $email = $_POST['email'];
    $pass = md5($_POST['pass']); 

    $q1 = "SELECT * FROM user WHERE email = '$email' AND password = '$pass' LIMIT 1";
    $res = mysqli_query($mysqli,$q1);
    if (mysqli_num_rows($res) == 1){    //User found!
        echo "User Found!";
        //header('location: home.php');	
    }
    else {
        echo "User not found!";
        
    }
    $mysqli->close(); 