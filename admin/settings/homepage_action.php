<?php	
	$err="";
	
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$homepage_text=$row['homepage_text'];
	
	if (isset($_POST['btn_update']))
	{
		$homepage_text=trim($_POST['homepage_text']);
		
		if($homepage_text!='')
		{
			mysql_query("update settings set homepage_text='$homepage_text' ");
		
			echo "<script>alert('Success !!'); window.location ='homepage.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
?>