<?php

$conn = mysqli_connect("localhost","root","","polytech");
if(!$conn)die(mysqli_connect_error($conn));
function checkadmin($email,$password){
	global $conn;
	$query = "select * from admin where Email='$email' and Password='$password'";

	$res = mysqli_query($conn,$query);
	if(mysqli_num_rows($res)>0){
		return 1;
	}
	else{
		return 0;
	}
}