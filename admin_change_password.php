<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="shortcut icon" href="image1/logo.png" type="image/x-icon">
<link rel="stylesheet" href="style.css" type="text/css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 10px grey; 
    border-radius: 10px;
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}


<!--Change color of radio button-->
input[type='radio'] 
{
    -webkit-appearance: none;
    width:20px;
    height:20px;
    border:1px solid #251c6f;
    border-radius:50%;
    outline:none;
    box-shadow:0 0 5px 0px #251c6f;
}
input[type='radio']:hover {
    box-shadow:0 0 5px 0px #251c6f;
}
input[type='radio']:before {
    content:'';
    display:block;
    width:60%;
    height:60%;
    margin: 20% auto;    
    border-radius:50%;    
}
input[type='radio']:checked:before {
    background:#45200a;
height:7px;
width:7px;
margin-top:4px;
}

<!--End of Change color of radio button-->
*
{
margin:0;
padding:0;
}
body
{
font-family:sans-serif;
}
#outer
{
position:absolute;
left:42%;
top:50%;
transform:translate(-50%,-50%);
background:rgba(69,32,10,0.7);
width:500px;
padding:40px;
box-sizing:border-box;
box-shadow:0 10px 25px rgba(0,0,0,0.5);

}
h2
{
margin:0 0 40px;
padding:0px;
color:#e3c99d;
text-transform:uppercase;
}
input
{
padding:10px 0;
margin-bottom:30px;
background-color:transparent;
}
textarea
{
height:50px;
padding:10px;
margin-bottom:40px;
background-color:transparent;
}
input,textarea
{
width:100%;
box-sizing:border-box;
box-shadow:none;
border:none;
outline:none;
border-bottom:2px solid #999 ;
color:#fff;
}
textarea
{
margin-bottom:20px;
}
input[type=submit]
{
border-bottom:none;
cursor:pointer;
background:#45200a;
color:#e3c99d;
margin-bottom:0;
text-transform:uppercase;
}
#outer form div
{
position:relative;
}
#outer form label
{
position:absolute;
top:10px;
pointer-events:none;
color:#e3c99d;
transition:.5s;
}
#outer input:focus~label,
#outer textarea:focus~label,
#outer input:valid~label,
#outer textarea:valid~label
{
top:-12;
left:0;
font-size:12px;
font-weight:bold;
}

#outer input:focus,
#outer textarea:focus,
#outer input:valid,
#outer textarea:valid
{
border-bottom:2px solid #45200a;
}
textarea
{
resize:none;
}
#logo
{
height:155px;
width:155px;
float:left;
}
#outer1
{
height:1100px;
width:100%;
}

select {
    background-color: transparent;
}

select option{
  	background-color: transparent !important;
	border: 1px solid #e4e4e4;
	color: #000;
	-webkit-appearance: none; 
     -moz-appearance: none;
}

#header
{
height:80px;
z-index:20;
}

#form
{
margin-top:-80px;
height:880px;
width:100%;
background-size:cover;
background-image:url('image1/10.JPg');
background-repeat:no-repeat;
}
#form_transparency
{
height:880px;
width:100%;
background-color:rgba(255,255,255,0.2);
}

#foot
{
height:450px;
width:100%;
background-image:url(image1/13.jpg);
background-attachment:fixed;
background-repeat:no-repeat;
}

#foot1
{
height:450px;
width:100%;
background-color:rgba(69,32,10,0.9);
}

#icon_above
{
border-top:1px solid #45200a;
height:410px;
width:100%;
color:white;
}

#icon_div
{
margin-left:100px;
margin-top:100px;
height:300px;
width:300px;
line-height:1.5;
float:left;
}

#icon_below
{
height:40px;
width:100%;
background:#45200a;
border-top:1px solid #808080;
}
#trademark
{
height:10px;
width:288px;
float:right;
margin-right:2px;
margin-top:15px;
color:white;
font-size:10px;
word-spacing:2;
}


#proprieter
{
height:10px;
width:130px;
border:0px solid red;
float:right;
margin-right:350px;
margin-top:15px;
color:white;
font-size:10px;
word-spacing:2;
}

::-webkit-scrollbar
{
width:10px;
}
::-webkit-scrollbar-thumb
{
background:#45200a;
background:linear-gradient(#000,#30ff00);
border-radius: 6px;
}
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 10px grey; 
    border-radius: 10px;
}


.icon_above1
{

height:218px;
width:180px;
margin-left:10px;
float:left;
font-size:11px;
color:#a0a0a0;
}
.icon_above1 a
{
text-decoration:none;
color:#45200a;
}
.icon_above1 a:hover
{
text-decoration:underline #45200a;
color:#45200a;
}

#logo
{
height:155px;
width:155px;
float:left;
}
#about
{
color:white;
padding-bottom:7px;
font-family:calibri;
font-size:18px;
height:25px;
width:55px;
border-bottom:1px solid #e3c99d;
}
nav
{
height:68px;
width:100%;
position:fixed;
z-index:50px;
background:rgba(255,255,255,0.5);
}
nav.black
{
background:rgba(0,0,0,0.5);
display: none;

}
nav ul
{
float:right;
margin:0;
padding:0;
display:flex;
}
nav ul li
{
list-style:none;
}
nav ul li a
{
color:#45200a;
padding:5px 20px;
text-decoration:none;
text-transform:uppercase;
transition:.5s;
font-family: 'Montserrat', sans-serif;
}
nav ul li a.active,nav ul li a:hover
{
color:#e3c99d;
background:#45200a;
padding:10px;
}	
#outer
{
position:absolute;
left:42%;
top:50%;
transform:translate(-50%,-50%);
background:rgba(0,0,0,0.5);
width:500px;
padding:40px;
box-sizing:border-box;
box-shadow:0 10px 25px rgba(0,0,0,0.5);
}
#content
{
padding:20px;
height:300px;
text-align:justify;
width:550px;
float:left;
margin-top:80px;
margin-left:300px;
background-color:rgba(255,255,255,0.4);
color:#45200a;
font-weight:bold;
box-shadow:0 5px 20px #fff;
border-radius:5px;
}
</style>
</head>
<body>
<div id="header">
<nav >
<div ID="logo"><img src="image1/logo.png" height="100" width="100" style="margin-top:-15px;margin-left:20px;"/></div>
<ul style="margin-top:25px;margin-right:45px;">
<li><a href="homepage.php">Home</a></li>
<li><a href="admin_change_password.php" class="active">Change Password</a></li>
<li><a href="adminpanel.php">Admin Panel</a></li>
<li><a href="logout.php">LogOut</a></li>
</ul>
</li>
</ul>
</nav>

</div>

<div id="form">
<div id="form_transparency">
<div id="outer" style="height:540px;margin-top:160px;margin-left:350px;">
<h2>change Password</h2>
<h5 style="margin-top:-40px;color:white;font-family:calibri">All fields are mendatory.</h5>
<form action="adminCPcode.php" method="post">
<div id="z1" style="margin-top:-10px;">
<select name="type" style="padding-left:25px;-webkit-appearance: none;background-color:transparent;border:1px solid #e3c99d;color:#e3c99d;width:100px;height:30px;margin-bottom:15px;font-size:15px;">
<option>Admin</option>
</select>
</div>
<div>
<input type="password" name="oldpass" required="">
<label>Old Password<sup>*</sup></label>
</div>
<div>
<input type="password" name="newpass" required="">
<label>New Password<sup>*</sup></label>
</div>
<div>
<input type="password" name="confirmpass" required="">
<label>Confirm Password<sup>*</sup></label>
</div>
<input type="submit" value="Change Password">
</form>
</div>
</div>
</div>


<div id="foot">
<div id="foot1">
<div id="icon_above">
<div id="icon_div">
<div id="about">About</div><br/>

Xcel Hair Salon<br> Poornima University<br/>
Vidhani<br/> Jaipur.
<br/><br/>
<span style="color:#e3c99d;font-size:15px;">91*******<br/><br/>
contact@xcelhairsalon.ie</span>

</div>
<div id="content"><img src="image1/logo.png" height="100" width="100" style="margin-top:-15px;margin-left:20px;"/>
<br>
<br>
Xcel Hair Salon its a CRM software to help your business to grow emphatically. 
A lot of the times when visiting a barber or hairdresser you have to wait in a queue not knowing
when your turn is. To avoid this waiting problem, we are developed an automated booking
platform for client and barber/hairdresser.
Design and implement a multiplatform application that allows barbers to register their business
details, their location, and their available slots, so customers can login to search and book
appointments.
 Choose Xcel Hair Salon CRM softwares and manage your business on your finger tips.

</div>
</div>
</div>


<div id="icon_below">
<a href="#"><i class="fab fa-facebook-f" style="color:#3B5998;font-size:25px;margin-left:50px;margin-top:10px;"></i></a>
<a href="#"><i class="fab fa-twitter " style="color:#00aced;font-size:25px;margin-left:50px;"></i></a>
<a href="#"><i class="far fa-envelope " style="color:#db4437;font-size:25px;margin-left:50px;"></i></a>
<a href="#"><i class="fab fa-whatsapp " style="color:#5acf67;font-size:25px;margin-left:50px;" ></i></a>
<div id="trademark">
&copy;  2018 Apollo Hospitals Enterprise Ltd. All Rights Reserved.
</div>
<div id="proprieter">
</div>
</div>
</div>
</div>
<script src="chatbot.js?v=3"></script>
</body>
</html>


