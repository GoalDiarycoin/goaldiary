<?php
	$err="";
	
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$ad_c_link=$row['ad_c_link'];
	$ad_r_link=$row['ad_r_link'];	
	$ad_c_type=$row['ad_c_type'];
	$ad_r_type=$row['ad_r_type'];
	$ad_c_iframe=$row['ad_c_iframe'];
	$ad_r_iframe=$row['ad_r_iframe'];
	
	if (isset($_POST['btn_update']))
	{
		$ad_c_link=trim($_POST['ad_c_link']);
		$ad_r_link=trim($_POST['ad_r_link']);
		$ad_c_type=trim($_POST['ad_c_type']);
		$ad_r_type=trim($_POST['ad_r_type']);
		$ad_c_iframe=mysql_real_escape_string(trim($_POST['ad_c_iframe']));
		$ad_r_iframe=mysql_real_escape_string(trim($_POST['ad_r_iframe']));
		
		mysql_query("update settings set ad_c_link = '$ad_c_link', ad_c_type = '$ad_c_type', ad_c_iframe = '$ad_c_iframe' , ad_r_link = '$ad_r_link', ad_r_type = '$ad_r_type', ad_r_iframe = '$ad_r_iframe' where id=1");
		
		if($_FILES['left']['name'] != "")
		{
			$extension = end((explode(".", $_FILES["left"]["name"])));
			
			if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
			{
				$UPLOAD_DIR="../../images/adss/";
				
				move_uploaded_file($_FILES['left']['tmp_name'], $UPLOAD_DIR."left.png");
			}
			else
			{
				$err.="Extension of left should be jpg/JPEG/JPG/jpeg/png/PNG/GIF/gif";
			}
		}
		
		if($_FILES['right']['name'] != "")
		{
			$extension = end((explode(".", $_FILES["right"]["name"])));
			
			if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
			{
				$UPLOAD_DIR="../../images/adss/";
				
				move_uploaded_file($_FILES['right']['tmp_name'], $UPLOAD_DIR."right.png");
			}
			else
			{
				$err.="Extension of banner image should be jpg/JPEG/JPG/jpeg/png/PNG/GIF/gif";
			}
		}
		
		if ($err=="")
		{
			echo "<script>alert('Success !!'); window.location ='ads.php'; </script>";
		}
	}
?>