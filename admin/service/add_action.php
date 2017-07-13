<?php	
	$err="";
	
	$name="";
	$link='';
	
	if (isset($_POST['btn_add']))
	{
		$name=trim($_POST['name']);
		$link=trim($_POST['link']);
		
		if($name!="")
		{
			mysql_query("insert into service (name, link) values ('$name', '$link')");
		
			echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
	
?>