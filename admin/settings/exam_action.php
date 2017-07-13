<?php	
	$err="";
	
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$exam_rules=$row['exam_rules'];
	
	if (isset($_POST['btn_update']))
	{
		$exam_rules=trim($_POST['exam_rules']);
		
		if($exam_rules!='')
		{
			mysql_query("update settings set exam_rules='$exam_rules' ");
		
			echo "<script>alert('Success !!'); window.location ='exam.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
?>