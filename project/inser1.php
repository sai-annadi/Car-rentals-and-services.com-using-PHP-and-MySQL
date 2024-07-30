<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style17.php">
</head>
</body>
<pre>

<div class="f2">
     <h2>CAR SERVICE BOOKINGS</h2>
     </div>
     


















</pre>
<section class="login-container">
<form action="inserv1.php" method="post" enctype="multipart/form-data">
	<div class="login-inputs">
    <label>Name:
    </label>
	<input type="text" name="name"  placeholder="ENTER REGISTERED USERNAME ..." required>
    <br>
    <label>Mobile Number:
    </label>
	<input type="text" name="number"  placeholder="MOBILE NUMBER..."  required>
    <br>
    <label>Car Company:
    </label>
    <input type="text"   name="ccomp" placeholder="CAR COMPANY..." required> 
       <br>
       <label>Car Name:
    </label>
    <input type="text"   name="cname" placeholder="CAR NAME..." required> 
       <br>
       <label>Car Year Model:
    </label>
	<input type="text" name="cmod"  placeholder="CAR YEAR MODEL..." required>
    <br>
    <label>Vehicle Number:
    </label>
	<input type="text" name="vnumb"   placeholder="VEHICEL NUMBER..." required>
    <br>
    <label>Type Of Service:
    </label>
    <select class="box" name="cserv"  id="carname">
        <option val="">Please choose</option>
        <option value="full service">FULL SERVICE</option>
        <option value="oil changing">OIL CHANGING</option>
        <option value="painting">PAINTING</option>
        <option value="tinkering">TINKERING</option>
        <option value="interior clean">INTERIOR CLEANING</option>
      </select>   
          <br>
          Note:Select date and time to give the car for service
       <label>Date:
    </label>
	<input type="date" class="box"  name="fdate" placeholder="DD/MM/YYYY" required>
    <br>
    <label>Time:(To give your car to service)
    </label>
    <select class="box" name="ctime"  id="carname">
        <option val="">Please choose</option>
        <option value="9:30-10:30">9:30-10:30</option>
        <option value="10:30-11:30">10:30-11:30</option>
        <option value="11:30-12:30">11:30-12:30</option>
        <option value="12:30-1:30">12:30-1:30</option>
        <option value="1:30-2:30">1:30-2:30</option>
        <option value="2:30-3:30">2:30-3:30</option>
        <option value="3:30-4:30">3:30-4:30</option>
      </select>   
          <br>
          <label>Address:
    </label>
	<input type="text" name="addr"   placeholder="CUSTOMER ADDRESS..." required>
    <br>
    
    <label>Driving License Number:
    </label>
	<input type="text" name="drl"  placeholder="DRIVING LICENSE NUMBER..." required>
    <br>
    <label>Driving License Image:
    </label>
    <input type="file"class="box1"  name="image" required>    <br>
    
	<input type="submit" name="insert"  value="BOOK">
    </div>
	</form>
    </section>
    <pre>
    <div class="f8">
<?php
echo"Note:once booking was requested wait untill admin will 
          check for mechanics and give confirmation ";
?>
</div>
</pre>
   
</body>
</html>     