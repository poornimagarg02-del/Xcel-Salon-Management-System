function fetchSubCategory(str)
{
	

	var req=new XMLHttpRequest();
	req.open("get","http://localhost/Anant/Hair%20Salon/category.php?category="+str,true);
	req.send();
	req.onreadystatechange=function ()
	{
		if(req.readyState==4 && req.status==200)
		{
			document.getElementById("subcategory").innerHTML=req.responseText;
		}
	};
}