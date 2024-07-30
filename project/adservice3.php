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
<h2>confirmed car service booking</h2>
</div>
<?php
$req='confirmed';
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
$sql = mysqli_query($conn,"select * from carservice where bookstatus='$req'");
echo "<table border='1' width='90%' cellpadding='15' cellspacing='5'>
<tr>
<th>BOOK ID</th>
<th>DRIVING LICENSE IMAGE</th>
<th>NAME</th>
<th>NUMBER</th>
<th>CAR COMPANY</th>
<th>CAR NAME</th>
<th>CAR YEAR MODEL</th>
<th>VEHICLE NUMBER</th>
<th>TYPE OF SERVICE</th>
<th>DATE</th>
<th>TIME</th>
<th>DRIVING LICENSE NUMBER</th>
<th>BOOKING STATUS</th>
</tr>";
while($row = mysqli_fetch_assoc($sql))
  {
  echo "<tr>";
  echo "<td>" . $row['bookid'] . "</td>";
  echo "<td><img src='imag/".$row['image']."' style=width:200px; height:100px; ></td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['number'] . "</td>";
  echo "<td>" . $row['carcompany'] . "</td>"; 
 echo "<td>" . $row['carname'] . "</td>"; 
 echo "<td>" . $row['carymodel'] . "</td>"; 
 echo "<td>" . $row['vnumber'] . "</td>"; 
 echo "<td>" . $row['typeofser'] . "</td>"; 
echo "<td>" . $row['fdate'] . "</td>"; 
echo "<td>" . $row['ftime'] . "</td>"; 
echo "<td>" . $row['dlnumber'] . "</td>"; 
echo "<td>" . $row['bookstatus'] . "</td>"; 
echo "<td><form action='conser.php' method='post'><input type='submit' name='edit' value='edit'></form></td>";
echo "</tr>"; 
  }

echo "</table>";



$conn->close();
?>
<div class="f3">
<form action="adinser.php">
<input type="submit" value="BACK">
</form>
</div>
</body>
</html>