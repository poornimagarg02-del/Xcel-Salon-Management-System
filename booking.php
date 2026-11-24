<?php
session_start();
include_once 'config.php';
$oid=rand(1000,9999);
$cid=$_SESSION['c_id'];
$c_name=$_SESSION['name'];


$f=0;
$id=$_REQUEST['id'];

$arr = explode(':', $id);

$tid = $arr[0];
//echo $var1;
$bid = $arr[1]; 
//echo $var2;
$sid = $arr[2]; 




$query1="select * from services where sid=$sid";
$res1=mysqli_query($conn, $query1);

if($row1=mysqli_fetch_assoc($res1))
{
	//echo $row1['sid'];
	$service=$row1['subcategory'];
	$price=$row1['price'];
}
$query2="select * from timeslot where tid=$tid";
$res2=mysqli_query($conn, $query2);

if($row2=mysqli_fetch_assoc($res2))
{
	//echo $row2['tid'];
	$date=$row2['date'];
	$time=$row2['time'];
}
	//echo $price=$row1['price'];
	//echo $row1['category'];

$query4="select * from booking where bid='$bid' and tid='$tid'";
$res4=mysqli_query($conn, $query4);
while($row4=mysqli_fetch_array($res4,MYSQLI_BOTH))
{
	if($bid==$row4['bid'] and $tid==$row4['tid'])
	{
		$f=1;
		break;
	}
}
	if($f==1)
	{
		?>
		<head>
		<script>
		alert("slot already booked");
		window.location="showbarbertocustomer.php";
		</script>
	</head>
	<?php
	}
	else
	{
$query3="insert into booking(oid,sid,cid,bid,tid,c_name,service,price,date,time,status) values('$oid','$sid','$cid','$bid','$tid','$c_name','$service','$price','$date','$time','pending')";
mysqli_query($conn, $query3);
?>
	<head>
		<script>
		alert("please check your booking status and note your order id");
		window.location="bookingstatus.php";
		</script>
	</head>
	<?php
	}
	
?>
	
	
	
	


	
