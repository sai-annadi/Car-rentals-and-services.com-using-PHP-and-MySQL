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

     if(isset($_POST['book']))
     {
       $target="imag/".basename($_FILES['image']['name']);
    $image=$_FILES['image']['name'];
    $name=$_POST['name'];
    $number=$_POST['number'];
    $carcompany=$_POST['ccomp'];
    $carname=$_POST['cname'];
    $carmod=$_POST['cmod'];
    $carnumb=$_POST['vnumb'];
    $carser=$_POST['cserv'];
    $fdate=$_POST['fdate'];
    $ftime=$_POST['ctime'];
    $drl=$_POST['drl'];
    $order='requested';
    $conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error()); 

    $sql="INSERT into carservice (name,number,carcompany,carname,carymodel,vnumber,typeofser,fdate,ftime,dlnumber,image,bookstatus) values ('$name','$number','$carcompany','$carname','$carmod','$carnumb','$carser','$fdate','$ftime','$drl','$image','$order')";
    mysqli_query($conn,$sql);
      if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
      {
        echo "BOOKING DONE SUCCESSFULLY CHECK FOR THE CONFIRMATION OF BOOKING STATUS";
      }
      else{
        echo "sorry not booked";
      }
     
     }
    ?>
</center>
<center><a class="f5" href="inser.php">BACK</a></center>
</body>
</html>