<?php
session_start();
$servername = "localhost";
    $username = "root";
    $password = "Vaishnavi12";
    $database = "food";
    $name = $_SESSION['name'];
$role = $_SESSION['role'];
    $con = mysqli_connect($servername,$username,$password,$database);
    if(!$con)
    {
        die("Connection failed: ".mysqli_connect_error());
    }
    else
    {
        echo "Connected successfully";
    }
?>