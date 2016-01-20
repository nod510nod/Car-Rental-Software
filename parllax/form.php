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

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$license = $_POST['license'];
$age = $_POST['age'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state =  $_POST['state'];
$zip = $_POST['zip'];

if($fname == '') {
	$errmsg_arr[] = 'You must enter your First Name';
	$errflag = true;
}
if($lname == '') {
	$errmsg_arr[] = 'You must enter your Last Name';
	$errflag = true;
}
if($license == '') {
	$errmsg_arr[] = 'You must enter your Driver License';
	$errflag = true;
}
if($address1 == '') {
	$errmsg_arr[] = 'You must enter your Address';
	$errflag = true;
}
if($city == '') {
	$errmsg_arr[] = 'You must enter your City';
	$errflag = true;
}
if($zip == '') {
	$errmsg_arr[] = 'You must enter your Zip';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: rentalIndex.php");
	exit();
}
// query
$sql = "INSERT INTO driverinfo (fname,lname,license,age,address1,address2,city,state,zip) 
	VALUES (:sas,:asas,:alicense,:aage,:aaddress1,:aaddress2,:acity,:astate,:azip)";
$q = $conn->prepare($sql);
$q->execute(array(':sas'=>$fname,':asas'=>$lname, ':alicense'=>$license, ':aage'=>$age,':aaddress1'=>$address1,':aaddress2'=>$address2,
	':acity'=>$city,':astate'=>$state,':azip'=>$zip));
header("location: rentalIndex.php");


?>