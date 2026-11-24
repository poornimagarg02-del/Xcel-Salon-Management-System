<?php
session_start();
include_once 'config.php';
$c_id=$_SESSION['c_id'];
$op=$_POST['oldpass'];
$np=$_POST['newpass'];
$cp=$_POST['confirmpass'];


$query1="select password from customer where id=$c_id";
$res=mysqli_query($conn, $query1);
if($row=mysqli_fetch_assoc($res))
{
	echo $row['password'];
	if($row['password']==$op)
	{
		if($np==$cp)
		{
				$query="update customer set password='$np' where id='$c_id'";
				mysqli_query($conn, $query);
				?>
					<script>
					alert("Password Changed");
					window.location="customer_change_password.php";
					</script>
<?php
				
		}
		else
		{
			?>
				<script>
					alert("New password and confirm password are not same..");
					window.location="customer_change_password.php";
				</script>
					<?php
			
		}
	}
	else
	{
		?>
			<script>
					alert("Entered password and old password are not same..")
					window.location="customer_change_password.php";
				</script>
		<?php
	}
}

?>
	
