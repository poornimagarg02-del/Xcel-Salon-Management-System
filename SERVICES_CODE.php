<?php
session_start();
include_once 'config.php';
$bid=$_SESSION['b_id'];
$category=$_POST['category'];
$subcategory=$_POST['subcategory'];
$price=$_POST['price'];
$s_id=rand(1000,9999);


$query="insert into services(sid,bid,category,subcategory,price) values('$s_id','$bid','$category','$subcategory','$price')";
mysqli_query($conn, $query);
?>
	
<script>
	alert("Service Added");
	window.location="services.php";
	</script>
