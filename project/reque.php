<html>
<head>
<style>
body{
    background-color:black;
    color:white;
    font-family:simpson;
    font-size:30;
    text-align:center;
}
input[type=submit] {
  background-color: darkred;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align:center;

}
input[type=submit]:hover {
  background-color: darkred;
  
}
</style>
</head>
<body>
<?php
if(isset($_POST['update']))
{
    $id=$_POST['bid'];
    $order=$_POST['cname'];
    $conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
    $sql="UPDATE  carrentalbooking SET bookstatus='$order' where bookid='$id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo"booking details updated";
    }

}
?>
<form action="request.php">
<input type="submit" value="BACK">
</form>
</body>
</html>