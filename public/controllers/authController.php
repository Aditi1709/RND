<?php 

session_start();
require 'config/db.php';
//require 'emailController.php';
//require 'login.php';
$errors = array();
$errorsl = array();
$username="";
$email="";
$password="";
$passwordConf="";
$PI_ID="";
//to check if connection with databases is correct or not
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//validation
if(isset($_POST['signup-btn'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	//$passwordConf = $_POST['passwordConf'];
	if(empty($username)){
		$errors['username'] = "Username required";
	}
	if(empty($password)){
		$errors['password'] = "Password required";
	}
	if(empty($email)){
		$errors['email'] = "Email required";
	}
	// if($password != $passwordConf){
	// 	$errors['password'] = "The two passwords do not match";
	// }
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "Email address is invalid";
	}
$emailQuery = "SELECT * FROM users WHERE email='$email' ";
$result = mysqli_query($conn,$emailQuery);
$num  = mysqli_num_rows($result);
	if($num == 1)
$errors['email'] = "Email already exists";	

$emailQuery = "SELECT * FROM users WHERE username='$username' ";
$result = mysqli_query($conn,$emailQuery);
$num  = mysqli_num_rows($result);
	if($num == 1)
$errors['username'] = "Username already exists";	

if(count($errors)=== 0){
	$password = password_hash($password, PASSWORD_DEFAULT);
	$token = bin2hex(random_bytes(50));
	$verified = 0;

	$sql = "INSERT INTO users(username,email,verified,token,password) VALUES('$username','$email','$verified','$token','$password')";
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	//echo "<script>alert('$result')</script>";
	// if($conn->query($sql)=== TRUE){
    	//everything is correctly executed then login user
    	$_SESSION['username'] = $username;
    	$_SESSION['email'] = $email;
    	$_SESSION['verified'] = $verified;

//set flash message
    	header("location: http://localhost/DBMSMinorProject/public/login.php");
    	exit();
    //}
}
}
//if login button is clicked
if(isset($_POST['login-btn'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(empty($username)){
		$errors['username'] = "Username required";
	}
	if(empty($password)){
		$errors['password'] = "Password required";
	}
	// if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	// 	$errors['email'] = "Email address is invalid";
	// }
if(count($errors)===0){
	$sql = "SELECT * FROM users WHERE email='$username'  LIMIT 1";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
        $_SESSION['username'] = $username;
    	$_SESSION['email'] = $email;
    	//$_SESSION['verified'] = $verified;
    header("location: http://localhost/DBMSMinorProject/public/home.php");
}
else{
	$errors['email'] = "Email address not found";
}
}
//logout user
if(isset($_POST['logout'])){
	session_destroy();
	unset($_SESSION['id']);
	unset($_SESSION['username']);
	unset($_SESSION['email']);
	//unset($_SESSION['verified']);
	header('location: http://localhost/DBMSMinorProject/public/login.php');
	exit();
}
}