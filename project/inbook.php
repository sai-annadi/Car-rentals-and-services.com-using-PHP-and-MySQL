<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style17.php">
</head>
</body>
<pre>
<div class="f2">

     <h2>CAR RENTAL BOOKINGS</h2>
     </div>







     </pre>

     <div class="sidenav">
<div class="f1">
<p>CUSTOMER DASHBOARD</p>
<br><br>
<a href="loghome.php">Profile details</a>
  <a href="inbook.php">Car Rental Booking</a>
  <a href="inser.php">Car Service Booking</a>
  <a href="viewrent.php">View Car Rental Booking</a>
  <a href="viewser.php">View Car Service Booking</a>
  <a href="incan.php">View Cancellation Car Rental Booking</a>
  <a href="secan.php">View Cancellation car Service Booking</a>
  <a href="chang.php">Change Password</a>
  <a href="logout.php">Log Out</a>

</div>
</div>



<section class="login-container">
<form action="inins.php" method="post" enctype="multipart/form-data">
	<div class="login-inputs">
    <label>Name:
    </label>
	<input type="text" name="name"  placeholder="ENTER REGISTERED USERNAME ..." required>
    <br>
    <label>Mobile Number:
    </label>
	<input type="text" name="number"  placeholder="MOBILE NUMBER..."  required>
    <br>
    <label>Car Name:
    </label>
    <select class="box" name="cname"  id="carname">
        <option val="">Please choose</option>
        <option value="baleno">BALENO</option>
        <option value="swift">SWIFT</option>
        <option value="brezza">BREZZA</option>
        <option value="creta">CRETA</option>
        <option value="duster">DUSTER</option>
        <option value="ertiga">ERTIGA</option>
        <option value="innova">INNOVA</option>
        <option value="venue">VENUE</option>
        <option value="verna">VERNA</option>
        <option value="xylo">XYLO</option>
        <option value="i20">I20</option>
      </select>   
       <br>
       <label>From Date:
    </label>
	<input type="date" class="box"  name="fdate" placeholder="DD/MM/YYYY" required>
    <br>
    <label>From Time:
    </label>
	<input type="time" class="box"  name="ftime" placeholder="00:00..." required>
    <br>
    <label>To Date:
    </label>
	<input type="date" class="box" name="tdate"  placeholder="DD/MM/YYYY..." required>
    <br>
    <label>To Time:
    </label>
	<input type="time" class="box"  name="ttime" placeholder="00:00..." required>
    <br>    
    <label>Driving License Number:
    </label>
	<input type="text" name="drl"  placeholder="DRIVING LICENSE NUMBER..." required>
    <br>
    <label>Driving License Image:
    </label>
    <input type="file"class="box1"  name="image" required>    <br>
    
	<input type="submit" name="book"  value="BOOK">
    </div>
	</form>

    </section>
</body>
</html>     