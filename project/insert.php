<html>
<head>
<style>
body{
    background-color:black;
    color:white;
    font-family:simpson;
    font-size:35;
    float:center;
}
.f5{
    background-color:darkred;
    color:white;
    font-family:simpson;
    font-size:25;
    text-decoration:none;

}
.f5:hover{
    background-color:red;
    color:white;
    text-decoration:none;
}
</style>
</head>
</body>
<center>
<?php
     if(isset($_POST['insert']))
     {
       $target="images/".basename($_FILES['image']['name']);
    $image=$_FILES['image']['name'];
    $name=$_POST['name'];
    $company=$_POST['carco'];
    $cartype=$_POST['carty'];
    $seat=$_POST['seat'];
    $price=$_POST['price'];
    $inform=$_POST['inform'];
    $conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error()); 

    $sql="INSERT into cardb (name,carcompany,cartype,image,seat,price,inform) values ('$name','$company','$cartype','$image','$seat','$price','$inform')";
    mysqli_query($conn,$sql);
      if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
      {
        echo "details uploaded";
      }
      else{
        echo "details not uploaded";
      }
     
     }
?>
</center>
<center><a class="f5" href="car.php">BACK</a></center>
</body>
</html>