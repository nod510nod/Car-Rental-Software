<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Najee Rental's</title>
</head>
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
     
    $user = $_POST['uname'];
    $password = $_POST['pword'];
     
    if($user == '') {
    	$errmsg_arr[] = 'You must enter your Username';
    	$errflag = true;
    }
    if($password == '') {
    	$errmsg_arr[] = 'You must enter your Password';
    	$errflag = true;
    }
     
    // query
    $result = $conn->prepare("SELECT * FROM users WHERE username= :user AND password= :pass");
    $result->bindParam(':user', $user);
    $result->bindParam(':pass', $password);
    $result->execute();
    $rows = $result->fetch(PDO::FETCH_NUM);
    if($rows > 0) {
    header("location: rentalIndex.php");
    }
    else{
    	$errmsg_arr[] = 'Username and Password are not found';
    	$errflag = true;
    }
    if($errflag) {
    	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    	session_write_close();
    	header("location: index.php");
    	exit();
    }
     
    ?>

<body>
</body>
</html>