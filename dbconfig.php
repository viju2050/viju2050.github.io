<?php

$dbconn = mysqli_connect('localhost','root','','student');
//$dbconn = mysqli_connect('localhost','Vijay1996','student');

if($dbconn){
	
}
else{
	die("connection failed:".mysqli_connect_error());
}



?>