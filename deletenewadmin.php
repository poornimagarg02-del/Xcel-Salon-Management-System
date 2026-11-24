<?php
include_once 'config.php';
$id=$_REQUEST['id'];


$query="delete from admin where id='$id'";
$res=mysqli_query($conn, $query);
header('Location:shownewadmin.php');
?>
