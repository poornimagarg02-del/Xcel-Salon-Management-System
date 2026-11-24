<?php
include_once 'config.php';
$id=$_REQUEST['id'];
//echo $id;


$query="delete from services where sid='$id'";
mysqli_query($conn, $query);
header("Location:showservicestoadmin.php");

?>
<script>
	alert("Delete Time Slot");
	window.location="deletetimeslot.php";
	</script>
