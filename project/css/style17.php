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
.login-container{
	background-image: url("../img/bal.jpg");
	background-size:cover;
	background-repeat: no-repeat;
	width:100%;
	height: 100vh;
	position: relative;
}
.login-inputs{
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%,-50%);
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
 
}

.login-inputs {
	background-color: #23243c;
	box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
	border-radius: 10px;
	padding: 30px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
.login-inputs label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:white;
}
input[type=text]{
	margin:10px;
	width:350px;
	height: 30px;
	background-color: #434459;
	border-radius: 10px;
	border: none;
	outline: none;
	color:#fff;
	padding:5px 10px;
}
input[type=text]::placeholder{
	color:#727383;
}
input[type=password]{
	margin:10px;
	width:250px;
	height: 30px;
	background-color: #434459;
	border-radius: 10px;
	border: none;
	outline: none;
	color:#fff;
	padding:5px 10px;
}
input[type=password]::placeholder{
	color:#727383;
}
select option {
  margin: 40px;
  background: black;
  color: #fff;
}
.box {
        width: 200px;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: #fff;
        background-color:#434459;
        border-radius: 20px;
      }
	  .box1 {
        width: 300px;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: #fff;
        background-color:#434459;
        border-radius: 20px;
      }
	  
input[type=submit]{
	text-transform: uppercase;
	width:300px;
	height: 35px;
	border-radius: 50px;
	border: none;
	outline: none;
	margin:5px;
	font-weight:600;
	background-color:darkred;
	color:#fff;
	font-size:12px;
	font-family: poppins;
	letter-spacing: 1px;
    cursor:pointer;
}
input[type=submit]:hover{
	background-color:black;
	transition: all ease 0.3s;
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
.f7{
  text-align:center;
  margin-top:360px;
  font-size:25;

}
.f8{
  text-align:center;
  margin-top:360px;
  font-size:25;

}
.b7{
  text-align:center;
  margin-left:360px;
  font-size:25;
  margin-top:100px;

}