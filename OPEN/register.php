<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";
$dbname = "open";
$mysqli = new mysqli($server, $user, $password, $dbname);
 
//Checking connection
 
if($mysqli->connect_error){
 die("Connection failed:" . $mysqli->connect_error);
}
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact']
    $pass = $_POST['pass'];
    $pass1= $_POST['pass1'];


    // Password Check
    if($pass1 != $pass){
        echo"Password do not match!";
    }
    else{
    $passfinal = md5($pass);
    $q="INSERT INTO user (name,email,contact,pass) values ('$name','$email','$contact','$passfinal')";
    
    if ($mysqli->query($q) === TRUE){
        echo "SUCCESS";
    }
    else {
        echo "Error in Saving!";
    }
    $mysqli->close();
}

?>