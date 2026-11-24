<?php
include_once 'config.php';
$id=$_REQUEST['id'];


$query="delete from contactus where id='$id'";
$res=mysqli_query($conn, $query);
header('Location:showcontactstoadmin.php');
?>
