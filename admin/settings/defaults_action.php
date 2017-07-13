<?php	
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$default_status=$row['default_status'];
	$inactive_status=$row['inactive_status'];
	$trending_status=$row['trending_status'];
	
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		$default_status=trim($_POST['default_status']);
		$inactive_status=trim($_POST['inactive_status']);
		$trending_status=trim($_POST['trending_status']);
		
		if($default_status!='' && $inactive_status!='' && $trending_status != '')
		{
			mysql_query("update settings set default_status=$default_status, inactive_status=$inactive_status, trending_status=$trending_status where id=1");
		
			echo"<script>alert('Success !!'); window.location ='defaults.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
	
	$qry="select * from status order by name asc";
	$status_list = mysql_query($qry);
?>