<html>
<head>
<title>CAR RENTALS AND SERVICES</title>  
<link rel='stylesheet' type='text/css' href='css/style15.php' />
</head>
<body>
<pre>



<h3> WELCOME ADMIN</h3>


</pre>
<div class="sidenav">
<div class="f1">
<p>ADMIN DASHBOARD</p>
<br><br>
<a href="adminhome.php">View Customerdetails</a>
  <a href="en.php">view Enquiry Booking</a>
  <a href="car.php">Add /Car details</a>
  <a href="adindian.php">View Indian Car Rental Booking</a>
  <a href="adind1.php">View Indian Car Sort Rental Booking</a>
  <a href="adinser.php">view Car Service Booking</a>
  <a href="adnri1.php">View NRI Car Rental Booking</a>
  <a href="adnri.php">View NRI Car Sort Rental Booking</a>
  <a href="chang2.php">Change Password</a>
  <a href="logout.php">Log Out</a>
</div>
</div>
<div class="f6">
<?php
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
$result = mysqli_query($conn,"select * from register");
echo "<table border='1' cellpadding='15' cellspacing='5'>
<tr>
<th>USERNAME</th>
<th>MOBILE NUMBER</th>
<th>EMAIL ID</th>
<th>NATIONALITY</th>
</tr>";
while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
 echo "<td>" . $row['number'] . "</td>"; 
echo "<td>" . $row['emailid'] . "</td>";
echo "<td>" . $row['nationality'] . "</td>"; 
 echo "</tr>"; 
 }
echo "</table>";



$conn->close();
?>
</div>

</body>
</html>