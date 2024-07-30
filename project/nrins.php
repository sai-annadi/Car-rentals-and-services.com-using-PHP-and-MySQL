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
       $target1="imag/".basename($_FILES['imag']['name']);
    $image=$_FILES['image']['name'];
    $imag=$_FILES['imag']['name'];
    $name=$_POST['name'];
    $number=$_POST['number'];
    $carname=$_POST['cname'];
    $fdate=$_POST['fdate'];
    $ftime=$_POST['ftime'];
    $tdate=$_POST['tdate'];
    $ttime=$_POST['ttime'];
    $drl=$_POST['drl'];
    $order='requested';

    $conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error()); 
    $sql="INSERT into carrentalsnri (name,number,carname,fdate,ftime,tdate,ttime,ppimage,dlnumber,image,bookstatus) values ('$name','$number','$carname','$fdate','$ftime','$tdate','$ttime','$imag','$drl','$image','$order')";
    mysqli_query($conn,$sql);
      if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
      {
        if(move_uploaded_file($_FILES['imag']['tmp_name'],$target1))
         {
        echo "Booked successfully";
         }
      }
      else{
        echo "sorry not booked";
      }
     
     }
?>
</center>
<center><a class="f5" href="nrbook.php">BACK</a></center>
</body>
</html>