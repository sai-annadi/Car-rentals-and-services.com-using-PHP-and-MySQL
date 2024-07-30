<html>
<head>
<style>
    body{
        background-color:black;
        color:white;
        font-family:simpson;
        font-size:30;
    }
    h2{
        background-color:darkred;
        color:white;
        font-family:simpson;
        font-size:45;
        text-align:center;
        margin:20px;
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
  background-color: red;
  color:white;
}
.but{
  margin:10px;
  text-align:center;
}
    </style>
    <title>View Customer Details</title>
</head>
<body>

    <h2>CUSTOMER DETAILS</h2>
<center>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
$result = mysqli_query($conn,"select * from register");
echo "<table border='1' width='70%' cellpadding='5' cellspacing='5'>
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
</center>
<div class="but">
    <form action="adminhome.php">
      <input type="submit" value="BACK">
</form>
    </div>
</div>
</body>
</html>