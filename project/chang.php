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