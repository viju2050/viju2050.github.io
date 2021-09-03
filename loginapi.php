<?php

require_once('dbconfig.php');

$username = $_POST['username'];
$password = $_POST['password'];

$loginqry = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";

$qry = mysqli_query($dbconn, $loginqry);

if(mysqli_num_rows($qry)> 0){
	
	$userObj = mysqli_fetch_assoc($qry);
	$response['status']=true;
	$response['message']="Login Success";
	$response['data'] = $userObj;
	
	
}
else{
	$response['status']=false;
	$response['message']="User Not Found";
	
}



//echo $error;
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($response);


?>