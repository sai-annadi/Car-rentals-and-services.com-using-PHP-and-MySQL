*
{
    padding:0;
    margin:0;

}
body{
    background-color:black;
    color:white;
    font-weight:bold;
}

.f2{
    background-color:darkred;
    color:white;
    font-family:simpson;
    font-size:50;
    text-align:center;
    margin:50px;
}
.f1{
    font-family:simpson;
    line-height:2.0;
}
.f1 p{
    font-size:40;
    font-family:simpson;
    text-align:center;

}
.f5{
    text-align:center;
    font-family:simpson;
    margin-left:300px;
}
.f5 table{
    text-align:center;
}
.sidenav {
  height: 100%;
  width: 250px;
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


/* Add an active class to the active dropdown button */

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
table, th, td{
    text-align:center;
    font-size:40;
    font-weight:italic;
    height:130px;
    width:1000px;
}