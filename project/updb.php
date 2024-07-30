<html>
<head>
<style>
body{
    background-color:black;
    color:white;
    font-family:simpson;
    font-size:25;
}
input[type=submit] {
  background-color: darkred;
  color: white;
  padding: 15px 30px;
  border: none;
  
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: darkred;
}
.but{
  display: inline-block;
  width:150px;
  height:30px;
  text-align:center;
  border: gray;
  margin:20px;
  background-color: black;
  color: #fff;
  cursor: pointer;
  font-weight: bold;
}

</style>
</head>
<body>
<center>
<?php
 if(isset($_POST['update']))
 {
     $name=$_POST['name'];
    $company=$_POST['carco'];
    $cartype=$_POST['carty'];
    $seat=$_POST['seat'];
    $price=$_POST['price'];
    $inform=$_POST['inform'];
$conn=mysqli_connect("localhost","root","","cardata") or die("failed:" . mysqli_connect_error()); 
$sql="UPDATE  cardb SET carcompany='$company',cartype='$cartype',seat='$seat',price=$price,inform='$inform' where name='$name'";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo"car deatils updated";
}
else{
    echo "car details not updated";
}

$conn->close();
 }
?>
<div class="but">
<form action="car.php">
<input type="submit" value="Back">
</form>
</div>
</center>
</body>
</html>