<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "najeerental";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data

$car = $_POST['car'];

// query
$sql = "INSERT INTO car (car) VALUES (:sas)";
$q = $conn->prepare($sql);
$q->execute(array(':sas'=>$car));
header("location: rentalIndex.php");


?>