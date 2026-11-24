<?php
include_once 'config.php';
$id=$_POST['id'];
//echo $id;
$name=$_POST['name'];
//echo $name;
$service=$_POST['service'];
//echo $service;
$price=$_POST['price'];
//echo $price;
$date=$_POST['date'];
//echo $date;
$time=$_POST['time'];
//echo $time;
$status=$_POST['status'];
//echo $status;





//include("connection.php");

$query="update booking set c_name='$name',service='$service',price='$price',date='$date',time='$time',status='$status' where oid='$id'";
mysqli_query($conn, $query);
header('Location:showbookingstatustobarber.php');



?>
