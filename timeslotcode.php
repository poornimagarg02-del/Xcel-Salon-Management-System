<?php
session_start();
include_once 'config.php';
$bid=$_SESSION['b_id'];
$date=$_POST['date'];
$time=$_POST['time'];
$weekday=$_POST['weekday'];
$tid=rand(1000,9999);
$s_id=rand(1000,9999);


$query="insert into timeslot(tid,bid,date,time,weekday) values('$tid','$bid','$date','$time','$weekday')";
mysqli_query($conn, $query);
?>
	
<script>
	alert("Time Slot Added");
	window.location="timeslot.php";
	</script>


?>
