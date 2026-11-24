<?php

session_start();  		
include_once 'config.php';
$b_id=$_SESSION['b_id'];
echo $b_id;
$op=$_POST['oldpass'];
echo $op;
$np=$_POST['newpass'];
echo $np;
$cp=$_POST['confirmpass'];
echo $cp;


$query1="select password from barber where id=$b_id";
$res=mysqli_query($conn, $query1);
if($row=mysqli_fetch_assoc($res))
{
	echo $row['password'];
	if($row['password']==$op)
	{
		echo "hello";
		if($np==$cp)
		{
			echo "hello";
				$query="update barber set password='$np' where id='$b_id'";
				mysqli_query($conn, $query);
				?>
					<script>
					alert("Password Changed");
					window.location="barber_change_password.php";
					</script>
<?php
				
		}
		else
		{
			?>
				<script>
					alert("New password and confirm password are not same..");
					window.location="barber_change_password.php";
				</script>
					<?php
			
		}
	}
	else
	{
		?>
			<script>
					alert("Entered password and old password are not same..")
					window.location="barber_change_password.php";
				</script>
		<?php
	}
}

?>
	
