<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style7.php">
</head>
<body>

<?php

$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$nation=$_POST['nationality'];
$pwd=$_POST['password'];
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());

$sql1=mysqli_query($conn,"select username , number from register where username='$name'AND number='$number'");

if(mysqli_num_rows($sql1) != 0)
{
	header('location:warning.php');
}
else
{
$sql=mysqli_query($conn,"insert into register (username,number,emailid,nationality,password) values ('$name','$number','$email','$nation','$pwd')") or die("failed:" . mysqli_error($conn));

if($sql)
echo "<h1>Registered successfully</h1><a href='log.php'>Log in</a>";
else
echo "<h1>you have already registerd</h1><a href='log.php'>Log in</a>";
}

$conn->close();
?>
</body>
</html>