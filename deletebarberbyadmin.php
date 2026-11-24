<?php
include_once 'config.php';
$id=$_REQUEST['id'];
//echo $id;


$query="delete from barber where id='$id'";
mysqli_query($conn, $query);
header("Location:showbarbers.php");

?>
