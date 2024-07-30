<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style10.php">
</head>
<body>
<?php

$name=$_POST['name'];
$number=$_POST['number'];
$query=$_POST['query'];
$conn=mysqli_connect("localhost","root","","carrentals") or die("failed:" . mysqli_connect_error()); 

$sql=mysqli_query($conn,"insert into enquiry (name,number,query) values ('$name','$number','$query')") or die("failed:" . mysqli_error($conn));

if($sql)
echo "<h2>your enquiry submitted successfully<h2>";
else
echo "<h2>your enquiry not submitted.</h2>";


$conn->close();
?>
<div class="f3">
<form action="home.php">
<input type="submit" value="back">
</form>
</div>
</body>
</html>