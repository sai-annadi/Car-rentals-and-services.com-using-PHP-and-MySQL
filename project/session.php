<?php
session_start();
$user_check=$_SESSION['username'];
$con=mysqli_connect('localhost','root','','carrentals');

$sql=mysqli_query($con,"select username,number from register where username='$user_check'");
$row = mysqli_fetch_assoc($sql)
$loggedin_id=$row['number'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
	echo "Go back";
	header("Location: index.php");
}
  ?>