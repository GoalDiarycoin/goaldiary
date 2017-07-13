<?php	
	$id=$_GET['id'];
	
	$qry="select * from subject where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	$name=$row['name'];
	$cat_id=$row['cat_id'];
	
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		$cat_id=$_POST['cat_id'];
		$name=trim($_POST['name']);
		
		if($name!='' && $cat_id!='')
		{
			mysql_query("update subject set name='$name', cat_id=$cat_id where id=$id");
		
			echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
	
	$qry="select * from category order by name asc";
	$list = mysql_query($qry);	
?>