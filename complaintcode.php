<?php
session_start();
include_once 'config.php';
$email=$_SESSION['c_email'];
$about=$_POST['about'];
$message=$_POST['message'];



$query="insert into complaint(email,about,message) values('$email','$about','$message')";
mysqli_query($conn, $query);
?>
	
<script>
	alert("Complaint Registered");
	window.location="complaint.php";
	</script>
