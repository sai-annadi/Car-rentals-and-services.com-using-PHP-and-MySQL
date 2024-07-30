<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style14.php">
</head>
<body>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
$uname=$_POST['username'];
$nation=$_POST['nationality'];
$pwd=$_POST['pass'];

if($nation=='indian')
{
$sql = "select username from register where username='$uname' and password='$pwd'";
$result=mysqli_query($conn,$sql) or die("failed".mysqli_error($conn));
$num_rows=mysqli_num_rows($result);
if($num_rows!=0){
while($row=mysqli_fetch_assoc($result))
{
	$_SESSION['username']=$row['username'];
    $_SESSION['sess_user']=$uname;  
  
	header('location:loghome.php');
    }

}
}
if($nation=='nri')
{
$sql = "select username from register where username='$uname' and password='$pwd'";
$result=mysqli_query($conn,$sql) or die("failed".mysqli_error($conn));
$num_rows=mysqli_num_rows($result);
if($num_rows!=0){
while($row=mysqli_fetch_assoc($result))
{
	$_SESSION['username']=$row['username'];
    $_SESSION['sess_user']=$uname;  
  
	header('location:nrihome.php');
    }

}
}


if ($uname =='admin' AND $nation=='indian' AND $pwd=='admin123' ) {
    $_SESSION['sess_user']=$uname;  
  
    header('location:adminhome.php');
}
 


else{
echo "<h1>Password didn't match with the username!</h1><a href='log.php'>Try again</a>";
	
}
$conn->close();
?>
</body>
</html>