<?php
ifisset($_POST['update'])
{
    $id=$_POST['bookid'];
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
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style17.php">
</head>
</body>
<pre>
<div class="f2">

     <h2>Booking update</h2>
     </div>

     <section class="login-container">
<form action="fetch.php" method="post" id="insert.form" enctype="multipart/form-data">
	<div class="login-inputs">
    <label>Booking id:
    </label>
	<input type="text" name="bookid" placeholder="ENTER BOOKING ID ..." required>
    <br>
    
    <label>BOOkING STATUS:
    </label>
    <select class="box" name="cname"  id="carname">
        <option val="">Please choose</option>
        <option value="confirmed ">ACCEPT</option>
        <option value="cancelled by admin">CANCEL</option>
      </select>   
       <br>    
	<input type="submit" name="update" value="update">
    </div>
	</form>

    </section>
    </body>
    </html>