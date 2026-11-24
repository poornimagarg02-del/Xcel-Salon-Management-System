<?php
error_reporting(0);
session_start();
$flg=$_REQUEST['flg'];
if($flg==1)
{
echo "Registered Successfully";
}
if($flg==2)
{
echo "Captcha Did not Matched";
}
$_SESSION['secure']=rand(1000,9999);
?>
<img src="generate.php" /><br/>
<form action="index2.php" method="post" />
Type the value what u see <input type="text" name="cap"/><br/>
<input type="submit" value="submit"/>
</form>