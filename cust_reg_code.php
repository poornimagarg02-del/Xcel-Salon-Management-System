<html>
<?php
include_once 'config.php';
$fullname=$_POST['name'];
$pno=$_POST['contactno'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
if($cpassword!=$password)
{
?>
	<head>
		<script>
		alert("Enter same password");
		//alert("Please login to check your status");
		</script>
	</head>
<?php
}
else
{


$query="insert into customer(fullname,pno,email,password,usertype) values('$fullname','$pno','$email','$password','customer')";
mysqli_query($conn, $query);
?>
<script>
	alert("Registered Successfully");
	</script>
<?php
//header('Location:customer_register.php');
}
?>
	<body>
	<script src="chatbot.js?v=3"></script>
</body>
	</html>
	


