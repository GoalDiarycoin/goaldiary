<?php	
	$err="";
	
	$cat_id='';
	$name='';
	
	if (isset($_POST['btn_add']))
	{
		$cat_id=$_POST['cat_id'];
		$name=trim($_POST['name']);		
		
		if($name!='' && $cat_id!='')
		{
			mysql_query("insert into subject (name, cat_id) values ('$name', $cat_id)");
		
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