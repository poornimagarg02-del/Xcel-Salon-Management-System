<?php
include_once 'config.php';
$id=$_REQUEST['id'];


$query="delete from customer where id='$id'";
$res=mysqli_query($conn, $query);
header('Location:showcustomers.php');
?>
