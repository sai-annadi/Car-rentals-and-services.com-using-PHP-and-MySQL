<html>
<head>
<title>CAR RENTALS AND SERVICES</title>  
<link rel='stylesheet' type='text/css' href='css/style5.php' />
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

<div class="f1">
<h2>CARS RENTALS</h2>
</div>
</pre>
<div class="f4">
   <pre>

   
   <p>A car rental is a vehicle that can be used temporarily for a period of time with a fee.
      Renting a car assists people to get around even when they do not have access to their own
      personal vehicle or don't own a vehicle at all. The individual who want to rent a car must
      first contact the car rental company for the desire vehicle. This can be done online. At
      this point, this person has to supply some information such as; dates of rental, and type of
      car. After these details are worked out, the individual renting the car must present a valid
      Identification Card.Most companies throughout the industry make a profit based of the type of 
      cars that arerented. The rental cars are categorized into economy, compact, compact premium,
      premium and luxury. And customers are free to choose any car of their choice based on
      their purse and availability of such car at the time of reservation. 
      </p>
      </pre>
      </div>
      <center> 
      <?php
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
$result = mysqli_query($conn,"select * from cardb");
echo "<table border='1' width='90%' cellpadding='15' cellspacing='5'>
<tr>
<th>CAR IMAGE</th>
<th>NAME</th>
<th>CAR COMPANY</th>
<th>CAR TYPE</th>
<th>SEAT</th>
<th>PRICE PER DAY</th>
<th>INFORMATION ABOUT CAR</th>
</tr>";
while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td><img src='images/".$row['image']."' style=width:200px; height:100px; ></td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['carcompany'] . "</td>";
 echo "<td>" . $row['cartype'] . "</td>"; 
echo "<td>" . $row['seat'] . "</td>"; 
echo "<td>" . $row['price'] . "</td>"; 
echo "<td>" . $row['inform'] . "</td>"; 
 echo "</tr>"; 
 }
echo "</table>";



$conn->close();
?>
</center>
</body>
</html>