<html>
<head>
<style>
body{
    background-color:black;
    color:white;
    font-family:simpson;
    font-size:30;
}
input[type=text], select, textarea {
  width: 70%;
  padding: 10px;
  border: 2px solid #ccc;
  border-radius: 5px;
  font-family:simpson;
  resize: vertical;
}
input[type=submit] {
  background-color: darkred;
  color: white;
  padding: 15px 30px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: darkred;
}
.but{
  display: inline-block;
  width:150px;
  height:30px;
  text-align:center;
  border: gray;
  margin:20px;
  background-color: black;
  color: #fff;
  cursor: pointer;
  font-weight: bold;
}


.container {
  border-radius: 6px;
  background-color: black;
    color:white;
  padding: 20px;
}

.col-25 {
  float: center;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: center;
  width: 50%;
  margin-top: 6px;
}
</style>
</head>
<body>
<center>
<div class="container">
<form action="del.php" method="post">
<div class="row">
      <div class="col-25">
        <label for="name">ENTER CAR NAME TO DELETE</label>
      </div>
      <div class="col-75">
        <input type="text" name="name" placeholder="car name.." required>
      </div>
      </div>
      <div class="but">
    <input type="submit" name="delete" value="DELETE">
    </div>
    </form>
    </div>
    </center>
</body>
</html>