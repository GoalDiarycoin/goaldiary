<?php	
	$err="";
	
	$name="";
	$res='';
	
	if (isset($_POST['btn_add']))
	{
		$name=trim($_POST['name']);
		
		if($name!="")
		{
			mysql_query("insert into status (name) values ('$name')");
		
			echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
	
?>