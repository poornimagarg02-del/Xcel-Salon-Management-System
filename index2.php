<?php
session_start();
include_once 'config.php';
$abc=$_SESSION['secure'];
$cap=$_POST['cap'];
if($abc==$cap)
{
	?>
	<script>
	alert("Registered Successfully!");
</script>
	<?php
	
header("Location:register.php");
}
else
{

	echo "Captcha not matched";
header("Location:register.php");
}
//echo $cap;
?>
	
	
<?php	
echo "<br/>";
echo $cap;
echo "<br/>";
$type=$_POST['type'];
echo $type;
echo "<br/>";
$name=$_POST['name'];
echo $name;
echo "<br/>";
$gender=$_POST['gender'];
echo $gender;
echo "<br/>";
$contact=$_POST['contactno'];
echo $contact;
echo "<br/>";
$address=$_POST['address'];
echo $address;
echo "<br/>";
$email=$_POST['email'];
echo $email;
echo "<br/>";
$password=$_POST['password'];
echo $password;


if($type=="Patient" and $abc==$cap)
{
$query="insert into patient(id,name,gender,contact,address,email,password) values( $cap,'$name','$gender',$contact,'$address','$email','$password')";
mysqli_query($conn, $query);
?>
<script>alert("hello");</script>
<?php
}
if($type=="Doctor" and $abc==$cap)
{
$query="insert into doctor(id,name,gender,contact,address,email,password) values( $cap,'$name','$gender',$contact,'$address','$email','$password')";
mysqli_query($conn, $query);
?>
<script>alert("hello");</script>
<?php
}
?>
	
