<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style12.php">
</head>
</body>
<pre>
<div class="f2">

     <h2>REGISTRATION</h2>
     </div>
     </pre>
     
<section class="login-container">
<form action="regi.php" method="post">
	<div class="login-inputs">
    <label>Username:
    </label>
	<input type="text" name="name" placeholder="username..." required>
    <br>
    <label>number:
    </label>
	<input type="text" name="number" pattern=".{1,10}" placeholder="Phone Number..."  required>
    <br>
    <label>email id:
    </label>
	<input type="text" name="email" placeholder="email..."  required>
    <br>
    <label>Nationality:
    </label>
	<select class="box" name="nationality" id="nationality">
        <option val="">Please choose</option>
        <option value="nri">NRI</option>
        <option value="indian">INDIAN</option>
      </select>
      <br>
    <label>password:
    </label>
	<input type="password" id="typepass" name="password" pattern=".{4,10}" placeholder="Password should be 4-10 characters..." required>
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
	<input type="submit" name="Register" value="REGISTER">
	</form>
    <form action="log.php">
    <input type="submit" value="back">
	</form>
    </section>
<pre><center>
    <?php echo("Note:kindly remeber to login "); ?>


    </pre></center>
</body>
</html>     