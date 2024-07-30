*
{
    padding:0;
    margin:0;

}
body{
    background-color:black;
    color:white;
    text-align:center;
    font-family:simpson;
    font-size:30;
}
h2{
    color:white;
    text-align:center;
    background-color:darkred;
    font-size:50;
    font-weight:bold;
   font-family:simpson;
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
.f3{
  margin:10px;
  text-align:center;
}
.f6{
    text-align:center;
    margin:10px;
    font-size:25;
    font-family:simpson;
    margin-left:370px;
   
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