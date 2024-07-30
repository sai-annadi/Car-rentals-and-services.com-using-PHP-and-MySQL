<?php
session_start();
$uname=$_SESSION['username'];
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
$sql="select * from register where username='$uname'";
$result=mysqli_query($conn,$sql);

echo "<table border='1' width='90%' cellpadding='15' cellspacing='5'>
<tr>
<th>USERNAME</th>
<th>MOBILE NUMBER</th>
<th>EMAILID</th>
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



?>
