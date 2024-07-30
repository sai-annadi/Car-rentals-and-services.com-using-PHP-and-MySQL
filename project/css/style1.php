*
{
    padding: 0;
    margin: 0;

}

body{
  background-color:black;
}
h2
{
    background-color: black;
    background-size: 15px;
    color: white;
    font-family: Georgia;
    font-variant-position: normal;
    font-size: 30;
    font-weight: bolder;
    font-size-adjust: auto;
     

}
.menu-bar
{
    background-color: black;
    text-align: center;

}
.menu-bar ul
{
    display: inline-flex;
    list-style: none;
    color: white;
}
.menu-bar ul li
{
    width: 120px;
    height: 15px;
    padding: 15px;
}
.menu-bar ul li a
{
    text-decoration: none;
    color: #fff;
}
.menu-bar ul li:hover
{
    background-color: darkred;
    border-radius: 3px;
}
.head{
    text-align: center;
    color: white;
    background-color: black;
    font-size: larger;
    font-weight: 900;
}

.ren {
  position: relative;
  text-align: center;
  color: white;
}
.top
{
    position: absolute;
    top: 10%;
    left: 20%;
}
.top h1
{
    color:white;
    font-family: verdana;
    font-size: larger;
    font-weight: 900;
}
.centre {
  position: absolute;
  font-family: arial;
  font-style: bold;
    color: white;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

}
.services {
  position: relative;
  text-align: center;
  color: white;
}
.ser-top
{
    position: absolute;
    top: 10%;
    left: 20%;
}
.ser-top h1
{
    color:white;
    font-family: verdana;
    font-size: larger;
    font-weight: 900;
}
.ser-centree
{
  position: absolute;
  font-family: arial;
  font-style: bold;
    color: #fff;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);


}
.f1{
    background-color: black;
    color:white;
    font-display: auto;
    font-size: largeractive;
    font-weight: bolder;
    
}
.f1 h3{
    text-align: center;
    font-family: sans-serif;
    font-weight: bold;
    
    
}
.f1 form{
    text-align: center;
    font-family:sans-serif;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
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
.but{
  margin:10px;
  text-align:center;
}
.container {
  border-radius: 5px;
  background-color: black;
    color:white;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.f2{
  background-color:black;

}
.f2 pre p{
  color:white;
  font-family:simpson;
}