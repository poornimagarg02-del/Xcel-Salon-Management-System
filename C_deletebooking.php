<?php
include_once 'config.php';
$id=$_REQUEST['id'];
echo $id;


$query="delete from booking where oid='$id'";
mysqli_query($conn, $query);

?>
	<script>
	alert("Booking Delete");
	window.location="bookingstatus.php";
	</script>
