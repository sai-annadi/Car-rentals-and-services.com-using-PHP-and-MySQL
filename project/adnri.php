<?php
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error());
?>
<!doctype html>
<html>
<head>
<title>CAR RENTALS AND SERVICES</title>  
<script type='text/javascript'>
   $(document).ready(function(){
     $('.dateFilter').datepicker({
        dateFormat: "yy-mm-dd"
     });
   });
   </script>
   <style>
   *
{
    padding: 0;
    margin: 0;

}
body{
    background-color:black;
    color:white;
    font-family:simpson;
    text-align:left;
    font-weight:bold;
    

}
.f2 h2{
    color:white;
    text-align:center;
    background-color:darkred;
    font-size:50;
    font-weight:bold;
   font-family:simpson;
}
.f6{
    text-align:center;
    margin:10px;
    font-size:25;
    font-family:simpson;
    margin-left:360px;
   
}
.f6 table{
    text-align:center;
    height:125px;
    width:1000px;
}
.sidenav {
  height: 100%;
  width: 350px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  font-family:simpson;
  background-color: darkred;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  border: royalblue;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: lightblue;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.f1{
    font-family:simpson;
    line-height:1.5;
}
.f1 p{
    font-size:40;
    font-family:simpson;
    text-align:center;

}
.datefilter{
        width: 200px;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: white;
        background-color:#434459;
        border-radius: 20px;
        text-align:center;
      
}
input[type=submit] {
  background-color: darkred;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}
input[type=submit]:hover {
  background-color: darkred;
}

   </style>
</head>
 <body >
   <pre>

<div class="f2">

<h2> NRI CAR RENTAL BOOKING</h2>
</div>
</pre>
<div class="sidenav">
<div class="f1">
<p>ADMIN DASHBOARD</p>
<br><br>
<a href="adminhome.php">View Customerdetails</a>
  <a href="en.php">view Enquiry Booking</a>
  <a href="car.php">Add /Car details</a>
  <a href="adindian.php">View Indian Car Rental Booking</a>
  <a href="adind1.php">View Indian Car Sort Rental Booking</a>
  <a href="adinser.php">view Car Service Booking</a>
  <a href="adnri1.php">View NRI Car Rental Booking</a>
  <a href="adnri.php">View NRI Car Sort Rental Booking</a>
  <a href="chang2.php">Change Password</a>
  <a href="logout.php">Log Out</a>

</div>
</div>

   <!-- Search filter --><center>
   <form method='post' action='adnri.php'>
     Start Date <input type='date' class='dateFilter' name='fromDate' value='<?php if(isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>'>
 
     End Date <input type='date' class='dateFilter' name='endDate'  value='<?php if(isset($_POST['endDate'])) echo $_POST['endDate']; ?>'>

     <input type='submit' name='but_search' value='Search'>
   </form>
   </center>
   <div class="f6">
   <!-- Employees List -->
   <div style='height: 80%; overflow: auto;' >
 
     <table border='1'  style='border-collapse: collapse;margin-top: 20px;'>
       <tr>
       <th>DRIVING LICENSE IMAGE</th>
       <th>PASSPORT IMAGE</th>
<th>NAME</th>
<th>NUMBER</th>
<th>CAR NAME</th>
<th>FROM DATE</th>
<th>FROM TIME</th>
<th>TO DATE</th>
<th>TO TIME</th>
<th>DRIVING LICENSE NUMBER</th>
<th>BOOKING STATUS</th>
       </tr>

       <?php
       $emp_query = "SELECT * FROM carrentalsnri WHERE 1 ";

       // Date filter
       if(isset($_POST['but_search'])){
          $fromDate = $_POST['fromDate'];
          $endDate = $_POST['endDate'];

          if(!empty($fromDate) && !empty($endDate)){
             $emp_query .= " and fdate 
                          between '".$fromDate."' and '".$endDate."' ";
          }
        }

        // Sort
        $emp_query .= " ORDER BY ftime DESC";
        $employeesRecords = mysqli_query($conn,$emp_query);

        // Check records found or not
        if(mysqli_num_rows($employeesRecords) > 0){
          while($row = mysqli_fetch_assoc($employeesRecords)){
            echo "<tr>";
  echo "<td><img src='imag/".$row['image']."' style=width:200px; height:100px; ></td>";
  echo "<td><img src='imag/".$row['ppimage']."' style=width:200px; height:100px; ></td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['number'] . "</td>";
 echo "<td>" . $row['carname'] . "</td>"; 
echo "<td>" . $row['fdate'] . "</td>"; 
echo "<td>" . $row['ftime'] . "</td>"; 
echo "<td>" . $row['tdate'] . "</td>"; 
echo "<td>" . $row['ttime'] . "</td>"; 
echo "<td>" . $row['dlnumber'] . "</td>"; 
echo "<td>" . $row['bookstatus'] . "</td>"; 
 echo "</tr>"; 
          }
        }else{
          echo "<tr>";
          echo "<td colspan='4'>No record found.</td>";
          echo "</tr>";
        }
        ?>
      </table>
 
    </div>
    </div>
 </body>
</html>