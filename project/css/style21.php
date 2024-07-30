*
{
    padding:0;
    margin:0;
}
body{
    background-color:black;
    color:white;
    font-family:simpson;
}

h3{
    background-color:darkred;
    color:white;
    font-size:45;
    font-weight:bold;
    text-align:center;
}
.f1{
    font-family:simpson;
    line-height:1.5;
    font-style:bold;
}
.f1 p{
    font-size:40;
    font-family:simpson;
    text-align:center;

}
.f2{
    display: inline-block;
    margin:10px; 
    background: darkred; 
    color: white;
    font-size: 1.5em;
    font-family: simpson;
    border-radius: 50px; 
    padding: 10px 20px; 
    -moz-transition: all 0.2s;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    text-align:center;
    text-decoration:none;
}
.f2:hover {
    background:red;
    color: white;
    text-decoration:none;
}
.f3{
    display: inline-block;
    margin:10px; 
    background: darkred; 
    color: white;
    font-size: 1.5em;
    font-family: simpson;
    border-radius: 50px; 
    padding: 10px 20px; 
    -moz-transition: all 0.2s;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    text-align:center;
    text-decoration:none;
}
.f3:hover {
    background:red;
    color: white;
    text-decoration:none;
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


/* Add an active class to the active dropdown button */

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.f6{
    text-align:center;
    font-family:simpson;
    margin-left:360px;
}
.f6 table{
    text-align:center;
    font-size:26;
    height:125px;
    width:700px;
}
input[type=submit] {
    margin:10px;
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