<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style18.php">
</head>
<body>



<pre>


</pre>
<div class="f2">

<?php 
  session_start();
    if($_SESSION['username']==true){ 
        echo "welcome  ". $_SESSION["username"];
        }
    elseif($_SESSION['username']==false) 
        echo '<a href="registerform.html"><span>Login/Register</span></a></li>';
    ?>
</div>
<div class="sidenav">
<div class="f1">
<p>CUSTOMER DASHBOARD</p>
<br><br>
<a href="loghome.php">Profile details</a>
  <a href="inbook.php">Car Rental Booking</a>
  <a href="inser.php">Car Service Booking</a>
  <a href="viewrent.php">View Car Rental Booking</a>
  <a href="viewser.php">View Car Service Booking</a>
  <a href="incan.php">View Cancellation Car Rental Booking</a>
  <a href="secan.php">View Cancellation car Service Booking</a>
  <a href="chang.php">Change Password</a>
  <a href="logout.php">Log Out</a>

</div>
</div>
<div class="f6">
<?php
$uname=$_SESSION['username'];
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
$sql="select * from register where username='$uname'";
$result=mysqli_query($conn,$sql);

echo "<table border='1' cellpadding='15' cellspacing='5'>
<tr>
<th>USERNAME</th>";
while($row = mysqli_fetch_assoc($result))
{
  echo "<td>" . $row['username'] . "</td>";
 echo "</tr>"; 
echo"
<tr>
<th>NUMBER</th>";
  echo "<td>" . $row['number'] . "</td>";
 echo "</tr>"; 

echo"<tr>
<th>EMAIL ID</th>";
  echo "<td>" . $row['emailid'] . "</td>";
 echo "</tr>"; 

echo"
<tr>
<th>NATIONALITY</th>";
  echo "<td>" . $row['nationality'] . "</td>";
 echo "</tr>"; 
}
echo "</table>";
$conn->close();



?>
</div>
</body>
</html>