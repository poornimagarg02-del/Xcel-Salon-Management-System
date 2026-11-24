<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
	
header("Location:login.php");
?>

	<script>alert("Please enter correct username and password");</script>
<?php
} 
if($msg==2)
{
	?>
		
		<script>
		alert("Logout Successfully");
		</script>
	<?php
	
//header("Location:login.php");
	

}
if($msg==3)
{
	?>

	<script>alert("Please Login First");</script>
<?php
}
?>
<html>
<head>
<script src="formscript.js"></script>
<title>
Add Services
</title><link rel="shortcut icon" href="image1/logo.png" type="image/x-icon">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="style1.css" type="text/css">
<style>
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
#outer form label
{
position:absolute;
top:15px;
pointer-events:none;
color:#e3c99d;
transition:.5s;
}
#outer input:focus~label,
#outer textarea:focus~label,
#outer input:valid~label,
#outer textarea:valid~label
{
top:-10px;
left:0px;
color:#e3c99d;
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
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 10px grey; 
    border-radius: 10px;
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
#header
{
height:80px;
z-index:20;
}
#loginas
{
height:30px;
width:150px;
background:white;
border-radius:15px;
color:#45200a;
position:relative;
left:41%;
top:12%;
font-size:25px;
padding:16px;
padding-left:60px;
border:1px solid #45200a;
box-shadow:2px 4px 15px ;
}
#type
{
height:300px;
width:800px;
position:relative;
left:19.5%;
top:18%;
}

.types
{
height:298px;
width:230px;
float:left;
margin-left:30px;
}
.circle
{
height:204px;
width:200px;
border-radius:50%;
margin-left:6%;
}

.circle_name
{
height:31px;
width:110px;
background:white;
border-radius:10px;
color:#45200a;
font-size:25px;
padding:2px;
padding-left:40px;
border:1px solid #45200a;
box-shadow:2px 4px 15px;
margin-left:17%; 
margin-top:6%; 
}
#type .types a
{
text-decoration:none;
}

#select1
{
margin-top:-80px;
height:680px;
width:100%;
background-image:url('Image1/24.jpg');
background-size:cover;
background-position:cover;
background-attachment:fixed;
}
#select2
{
margin-top:-80px;
height:680px;
width:100%;
background-color:rgba(69,32,10,0.4);
background-size:cover;
background-position:cover;
background-attachment:fixed;
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
color:#e3c99d;;
background:#45200a;
padding:10px;
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
float:left;
line-height:1.5;
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

input[type="submit"]
{
color:#e3c99d;
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

<div id="header" >
<nav >
<div ID="logo"><img src="image1/logo.png" height="100" width="100" style="margin-top:-15px;margin-left:20px;"/></div>
<ul style="margin-top:25px;margin-right:45px;">
<li><a href="homepage.php">Home</a></li>
<li><a href="services.php">Services</a></li>
<li><a href="timeslot.php">Time Slot</a></li>
<li><a href="showbookingstatustobarber.php">Show Bookings</a></li>
<li><a href="barber_change_password.php">Change Password</a></li>
<li><a href="barberpanel.php" class="active">Barber Panel</a></li>
<li><a href="logout.php">LogOut</a></li>
</ul>


</li>
</ul>
</nav>
</div>

<div id="select1">

<br><br><br><br>
<span style="color:#45200a;font-size:20px;background-color:rgba(255,255,255,0.7);">Welcome<br><?php session_start(); echo $_SESSION['name']; echo "<br>"; echo $_SESSION['b_email'];?></span>

<div id="select2">
<div id="outer" style="height:300px;width:600px;margin-top:70px;margin-right:200px;">
<h2 style="color:#fff;">Services</h2>
<form action="SERVICES_CODE.php" method="post">
<table cellpadding="10">
<tr>
<td>
<div id="z1" style="margin-top:0px;">
<select name="category" style="padding-left:10px;background-color:transparent;border:1px solid #e3c99d;color:#e3c99d;width:150px;height:30px;margin-bottom:15px;font-size:15px;" onchange="fetchSubCategory(this.value)">
<option>--Category--</option>
<option>HAIR CUTS</option>
<option>HAIR COLOR</option>
<option>HAIR STYLING</option>
<option>HAIR STRAIGHTENING</option>
<option>HAIR SPA</option>
<option>SHAMPOO</option>
</select>
</div>
</td>
<td>
<div id="z1" style="margin-top:0px;">
<select name="subcategory" style="padding-left:10px;background-color:transparent;border:1px solid #e3c99d;color:#e3c99d;width:150px;height:30px;margin-bottom:15px;font-size:15px;" id="subcategory">
<option>--Sub Category--</option>
</select>
</div>
</td>
<td>
<div>
<input type="number" name="price" required="" STYLE="BORDER-BOTTOM:2PX SOLID #e3c99d;" >
<label>Price</label>
</div>
</td>

</tr>
</table>
<br/>
<input type="submit" value="Add Service">
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

</div>
<div id="proprieter">

</div>
</div>
</div>
</div>

<script src="chatbot.js?v=3"></script>
</body>
</html>



