<html>
<head>
<style>
body{
    background-color:black;
    color:white;
    font-family:simpson;
}
.f2 h2{
    background-color:darkred;
    color:white;
    font-size:50;
    text-align:center;
    font-family:simpson;
}
input[type=submit] {
  background-color: darkred;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}
input[type=submit]:hover {
  background-color: darkred;
  
}
.f3{
    text-align:center;
    margin:10px;
}
</style>
</head>
<body>
<div class="f2">
<h2>Confirmed car booking</h2>
</div>
<?php
$req='confirmed';
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
$sql = mysqli_query($conn,"select * from carrentalsnri where bookstatus='$req'");
echo "<table border='1' width='60%' cellpadding='15' cellspacing='5'>
<tr>
<th>BOOKING ID</th>
<th>DRIVING LICENSE IMAGE</th>
<th>PASSPORT IMAGE</th>
<th>NAME</th>
<th>NUMBER</th>
<th>CAR NAME</th>
<th>FROM DATE</th>
<th>FROM TIME</th>
<th>TO DATE</th>
<th>TO TIME</th>
<th>DRIVING LICENSE NUMBER</th>
<th>BOOKING STATUS</th>
<th>BUTTONS</th>
</tr>";
while($row = mysqli_fetch_assoc($sql))
  {
  echo "<tr>";
  echo "<td>" . $row['bookid'] . "</td>";
  echo "<td><img src='imag/".$row['image']."' style=width:200px; height:100px; ></td>";
  echo "<td><img src='imag/".$row['ppimage']."' style=width:200px; height:100px; ></td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['number'] . "</td>";
 echo "<td>" . $row['carname'] . "</td>"; 
echo "<td>" . $row['fdate'] . "</td>"; 
echo "<td>" . $row['ftime'] . "</td>"; 
echo "<td>" . $row['tdate'] . "</td>"; 
echo "<td>" . $row['ttime'] . "</td>"; 
echo "<td>" . $row['dlnumber'] . "</td>"; 
echo "<td>" . $row['bookstatus'] . "</td>"; 
echo "<td><form action='confinri.php' method='post'><input type='submit' name='edit' value='edit'></form></td>";

echo "</tr>"; 
  }

echo "</table>";



$conn->close();
?>
<div class="f3">
<form action="adnri1.php">
<input type="submit" value="BACK">
</form>
</div>
</body>
</html>