<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style19.php">
</head>
</body>
<pre>
<div class="f2">

     <h2>View CAR RENTAL BOOKINGS</h2>
     </div>


     </pre>

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
session_start();
$uname=$_SESSION['username'];
$req='requested';
$re='confirmed';
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
$sql ="select * from carrentalbooking where bookstatus='$req'OR bookstatus='$re' AND name='$uname'";
$result=mysqli_query($conn,$sql);
echo "<table border='1' width='90%' cellpadding='15' cellspacing='5'>
<tr>
<th>BOOKID</th>
<th>DRIVING LICENSE IMAGE</th>
<th>NAME</th>
<th>NUMBER</th>
<th>CAR NAME</th>
<th>FROM DATE</th>
<th>FROM TIME</th>
<th>TO DATE</th>
<th>TO TIME</th>
<th>DRIVING LICENSE NUMBER</th>
<th>BOOKING STATUS</th>
<th>OPTIONS</th>
</tr>";
while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['bookid'] . "</td>";
  echo "<td><img src='imag/".$row['image']."' style=width:200px; height:100px; ></td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['number'] . "</td>";
 echo "<td>" . $row['carname'] . "</td>"; 
echo "<td>" . $row['fdate'] . "</td>"; 
echo "<td>" . $row['ftime'] . "</td>"; 
echo "<td>" . $row['tdate'] . "</td>"; 
echo "<td>" . $row['ttime'] . "</td>"; 
echo "<td>" . $row['dlnumber'] . "</td>"; 
echo "<td>" . $row['bookstatus'] . "</td>"; 
echo "<td><form action='viewent.php' method='post'><input type='submit'name='cancel' value='CANCEL'></form></td>";
echo "</tr>"; 
  }

echo "</table>";



$conn->close();
?>
</div>
</body>
</html>