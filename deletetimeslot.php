<?php
include_once 'config.php';
$id=$_REQUEST['id'];
echo $id;


$query="delete from timeslot where tid='$id'";
mysqli_query($conn, $query);
header("Location:showtimeslot.php");

?>
