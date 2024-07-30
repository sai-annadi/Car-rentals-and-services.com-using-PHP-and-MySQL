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
if(isset($_POST['cancel']))
{
    session_start();
    $uname=$_SESSION['username'];
    $order="cancelled";
    $conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
    $sql="UPDATE  carrentalbooking SET bookstatus='$order' where name='$uname'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo"cancelled booking";
    }
    else{
        echo"problem in cancelling try after some time";
    }

}
?>
<form action="viewrent.php">
<input type="submit" value="BACK">
</form>
</body>
</html>