<?php	
	$id=$_GET['id'];
	
	$qry="select * from quicklinks where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	$name=$row['name'];
	$link=$row['link'];
	
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		$name=trim($_POST['name']);
		$link=trim($_POST['link']);
		
		if($name!="" && $link!='')
		{
			mysql_query("update quicklinks set name='$name', link='$link' where id=$id");
		
			echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
	
?>