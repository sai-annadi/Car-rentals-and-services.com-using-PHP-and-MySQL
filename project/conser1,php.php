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
<form action="requeser1.php" method="post">
	<div class="login-inputs">
    <label>Booking id:
    </label>
	<input type="text" name="bid" placeholder="ENTER BOOKING ID ..." required>
    <br>
    
    <label>BOOkING STATUS:
    </label>
    <select class="box" name="cname"  id="carname">
        <option val="">Please choose</option>
        <option value="cancelled by admin">CANCEL</option>
      </select>   
       <br>    
	<input type="submit" name="update" value="update">
    </div>
	</form>

    </section>
    
    </body>
    </html>