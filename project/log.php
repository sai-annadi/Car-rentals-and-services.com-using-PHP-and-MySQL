<html>    
<head>
<title>CAR RENTALS AND SERVICES</title>  
<link rel='stylesheet' type='text/css' href='css/style8.php' />
</head>
<body>
<h2 align="left">CAR RENTALS AND SERVICES.COM</h2>
<div class="menu-bar">
<ul>
<li><a href="home.php">HOME</a></li>
<li><a href="abo.php">ABOUT US</a></li>
<li><a href="services.php">SERVICES</a></li>
<li><a href="rent.php">CARS</a></li>
<li><a href="log.php">LOGIN/SIGNUP</a></li>
<li><a href="cont.php">CONTACT US</a></li>
</ul>
</div> 
<pre>
<div class="f2">

     <h2> LOGIN PAGE</h2>
     </div>
     </pre>
     <form action="login.php" method="post">
    <section class="login-container">
	<div class="login-inputs">
    
     
    <label>Username:
    </label>
	<input type="text" name="username" placeholder="username..." required />
    <br><br>
    <label>Nationality:
    </label>
	<select class="box" name="nationality" id="nationality" required>
        <option val="">Please choose</option>
        <option value="nri">NRI</option>
        <option value="indian">INDIAN</option>
      </select>
    <br><br>
    <label>password:
    </label>
	<input type="password" id="typepass" name="pass" placeholder="Password..." required />
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
	
    <input type="submit" name="submit" value="LogIn">
	


    NEW USER <a href="reg.php">REGISTER HERE !!!</a>
	<a class="forget" href="#">Forgot Password</a>
	</div>
	</section>
    </form>
<pre><center>
    <?php echo("Note:kindly register to login "); ?>


    </pre></center>
</body>
</html>     