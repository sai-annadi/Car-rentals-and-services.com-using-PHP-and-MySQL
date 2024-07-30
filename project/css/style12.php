*{
    margin: 0;  
    padding: 0;
}
body  
{  
      
    background-color:black;  
    font-family: 'simpson';  
    color:white;
}  
h2{
    color: white;
    font-weight:bolder;
    font-size:30;
	font-family:simpsom;

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
	width:250px;
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
input[type=submit]{
	text-transform: uppercase;
	width:110px;
	height: 35px;
	border-radius: 20px;
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