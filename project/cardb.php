<html>
<head>
<link rel='stylesheet' type='text/css' href='css/style6.php' />
</head>
<body>
<pre>

<h2>ADD CAR DETAILS</h2>
</pre>
<div class="container">
<form action="insert.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="name">Car Name:</label>
      </div>
      <div class="col-75">
        <input type="text" name="name" placeholder="car name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="name">Car Company:</label>
      </div>
      <div class="col-75">
        <input type="text" name="carco" placeholder="car Company.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="cartype">car type</label>
      </div>
      <div class="col-75">
        <input type="text"  name="carty" placeholder="petrol/diesel.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="carimg">Car Image:</label>
      </div>
      <div class="col-75">
        <input type="file" name="image" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="cartype">seat capacity:</label>
      </div>
      <div class="col-75">
        <input type="text"  name="seat" placeholder="Seat capacity.. " required>
      </div>
      </div>
      <div class="row">
      <div class="col-25">
        <label for="cartype">Price per day</label>
      </div>
      <div class="col-75">
        <input type="text"  name="price" placeholder="price per day.. " required>
      </div>
      </div>
    <div class="row">
      <div class="col-25">
        <label for="inform">Information about car:</label>
      </div>
      <div class="col-75">
        <textarea name="inform" placeholder="Write something.." style="height:200px" required></textarea>
      </div>
    </div>
    </div>
    <div class="but">
    <input type="submit" name="insert" value="insert">
    </div>
    </form>
</body>
</htnl>
  