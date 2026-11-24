<html>
<?php
include_once 'config.php';
$name=$_POST['name'];
$email=$_POST['email'];
$b_id=rand(1000,9999);
$subject=$_POST['subject'];
$message=$_POST['message'];


$query="insert into contactus(id,name,email,subject,message) values('$b_id','$name','$email','$subject','$message')";
mysqli_query($conn, $query);
?>
	<head>
	<script>
	alert("Message Sent");
	window.location="contact_us.php";
	</script>
	</head>
