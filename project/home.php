<html>
<head>
<title>CAR RENTALS AND SERVICES</title>  
<link rel='stylesheet' type='text/css' href='css/style1.php' />
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
    <div class="head">
        <pre>
        <p>        WELCOME TO
           CAR RENTALS AND SERVICES.COM
        </p></pre>
    </div>
<div class="ren">
<div class="top"><h1>CAR RENTALS</h1></div>
<img src="img/1.jpg" width="1466px" height="550px">
<div class="centre"><p>car rentals is used book the car.for user authenication,customer is used to provide the driving license for booking the car.</p></div>
</div>
<div class="services">
<img src="img/2.jpeg" width="1466px" height="500px" > 
<div class="ser-top"><h1>SERVICES</h1></div>
<div class="ser-centree"><p>The customer can book the slot for the services.The time slot is provided in the option.The customer needs to give the car for services in the respective car store.</p></div>
</div>  

<div class="f1">
        <h3>Enquiry form</h3>
        <br />
        </div>
       <div class="container">
  <form action="enquiry.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name:</label>
      </div>
      <div class="col-75">
        <input type="text" name="name" placeholder="Your name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="phonenumber">Phone number</label>
      </div>
      <div class="col-75">
        <input type="text" name="number" placeholder="Your phone number.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="query">Query:</label>
      </div>
      <div class="col-75">
        <textarea name="query" placeholder="Write your query.." style="height:200px" required></textarea>
      </div>
    </div>
    <div class="but">
      <input type="submit" value="Submit">
    </div>
    <div class="f2">
    <pre>
    <p>
    NOTE:Kindly provide basic details to get information for the query</p>
    </pre>
    </div>

  </form>
</div>
</body>
</html>
