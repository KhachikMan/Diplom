<?php
include("model.php");
$email=$_POST['email'];
$pass=$_POST["pass"];
session_start();

$res = checkadmin($email,$pass);
if($res == true){
	
	$_SESSION['admin'] = $email;
	header("location:../pages/dashboard.php");die;
}
else{
	$_SESSION['error'] = "<script>alert('Incorect Email or password, please try again!')</script>";
	header("location:index.php");die;

}