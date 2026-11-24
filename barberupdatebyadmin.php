<?php
include_once 'config.php';
$id=$_POST['id'];
echo $id;
$name=$_POST['fullname'];
$gender=$_POST['gender'];
$pno=$_POST['pno'];
$location=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];
$vstatus=$_POST['vstatus'];




//include("connection.php");

$query="update barber set name='$name',gender='$gender',contact='$pno',address='$location',email='$email',password='$password',usertype='$usertype',vstatus='$vstatus' where id='$id'";
mysqli_query($conn, $query);
header('Location:showbarbers.php');



?>
