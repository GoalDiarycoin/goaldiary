<?php	
	$id=$_GET['id'];
	
	$qry="select * from status where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	$name=$row['name'];
	
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		$name=trim($_POST['name']);
		
		if($name!="")
		{
			mysql_query("update status set name='$name' where id=$id");
		
			echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
	
?>