<?php	
	$err="";
	
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$side_cat=$row['side_cat'];
	$side_sub=$row['side_sub'];
	$side_qn_set=$row['side_qn_set'];
	
	if (isset($_POST['btn_update']))
	{
		$side_cat=trim($_POST['side_cat']);
		$side_sub=trim($_POST['side_sub']);
		$side_qn_set=trim($_POST['side_qn_set']);
		
		if($side_cat!='' && $side_sub!='' && $side_qn_set!='')
		{
			mysql_query("update settings set side_cat='$side_cat', side_sub='$side_sub', side_qn_set='$side_qn_set' ");
		
			echo "<script>alert('Success !!'); window.location ='sidebar.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
?>