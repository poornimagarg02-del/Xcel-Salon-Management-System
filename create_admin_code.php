<html>
<?php
include_once 'config.php';
$email=$_POST['email'];
$password=$_POST['password'];


$query="insert into admin(email,password,usertype) values('$email','$password','admin')";
mysqli_query($conn, $query);
?>
	
<script>
	alert("Registered Successfully");
	window.location="create_admin.php";
</script>
