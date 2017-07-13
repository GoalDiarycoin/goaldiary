<?php	
	$err="";
	
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$sample_rules=$row['sample_rules'];
	
	if (isset($_POST['btn_update']))
	{
		$sample_rules=trim($_POST['sample_rules']);
		
		if($sample_rules!='')
		{
			mysql_query("update settings set sample_rules='$sample_rules' ");
		
			echo "<script>alert('Success !!'); window.location ='sample.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
?>