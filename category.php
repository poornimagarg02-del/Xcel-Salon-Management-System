<?php
	$category=$_GET['category'];

    $c1=array('LONG HAIR','SHORT HAIR','MEDIUM HAIR','MEN HAIR','ROOT TOUCHUP');
	$c2=array('CHANGE OF HAIR STYLE WOMEN','HAIR TRIMMING WOMEN','HAIR CUTS KIDS','HAIR TRIMMING MEN','SHAVE');
	$c3=array('HAIR STYLING','HAIR STYLING IRONING BLOW DRY','STREAKING PER STREAKING');
	$c4=array('HAIR STRAIGHTENING REBOUNDING');
	$c5=array('HAIR SPA TREATMENT');
	$c6=array('SHAMPOO AND CONDITIONER');
	
	if($category=="HAIR CUTS")
	{
		foreach($c1 as $c)
			echo "<option>$c</option>";
	}
	else if($category=="HAIR COLOR")
	{
		foreach($c2 as $c)
			echo "<option>$c</option>";
	}
	else if($category=="HAIR STYLING")
	{
		foreach($c3 as $c)
			echo "<option>$c</option>";
	}
	else if($category=="HAIR STRAIGHTENING")
	{
		foreach($c4 as $c)
			echo "<option>$c</option>";
	}
	else if($category=="HAIR SPA")
	{
		foreach($c5 as $c)
			echo "<option>$c</option>";
	}
	else if($category=="SHAMPOO")
	{
		foreach($c6 as $c)
			echo "<option>$c</option>";
	}
	else
		echo "<option>First Select Category</option>";
	?>
