<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style17.php">
</head>
</body>
<pre>
<div class="f2">

     <h2>CHANGE PASSWORD</h2>
     </div>
     </pre>
     <div class="sidenav">
<div class="f1">
<p>ADMIN DASHBOARD</p>
<br><br>
<a href="adminhome.php">View Customerdetails</a>
  <a href="en.php">view Enquiry Booking</a>
  <a href="car.php">Add /Car details</a>
  <a href="adindian.php">View Indian Car  Rental Booking</a>
  <a href="adind1.php">View Indian Car Sort Rental Booking</a>
  <a href="adinser.php">view Car Service Booking</a>
  <a href="adnri1.php">View NRI Car Rental Booking</a>
  <a href="adnri.php">View NRI Car Sort Rental Booking</a>
  <a href="chang2.php">Change Password</a>
  <a href="logout.php">Log Out</a>
</div>
</div>    
<section class="login-container">
<form action="change.php" method="post">
	<div class="login-inputs">
    <label>Current Password:
    </label>
	<input type="text" name="pwd" placeholder="CURRENT PASSWORD..." required>
    <br>
    <label>New Password:
    </label>
	<input type="password" id="typepass" name="password" pattern=".{4,10}" placeholder=" New Password should be 4-10 characters..." required>
    <br>
    <input type="checkbox" onclick="Toggle()"> 
    <b>Show Password</b>
  
    <script> 
    // Change the type of input to password or text 
        function Toggle() { 
            var temp = document.getElementById("typepass"); 
            if (temp.type === "password") { 
                temp.type = "text"; 
            } 
            else { 
                temp.type = "password"; 
            } 
        } 
</script> 
	<input type="submit" name="register" value="submit">
	</form>
    </section>
<pre><center>
    <?php echo("Note:kindly remeber to login "); ?>


    </pre></center>
</body>
</html>     