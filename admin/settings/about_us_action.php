<?php	
	$err="";
	
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$about_us_breif=$row['about_us_breif'];
	$about_us_detailed=$row['about_us_detailed'];
	$footer_plugin=$row['footer_plugin'];
	$about_video=$row['about_video'];
	$about_video_text=$row['about_video_text'];
	
	if (isset($_POST['btn_update']))
	{
		$about_us_breif=mysql_real_escape_string($_POST['about_us_breif']);
		$about_us_detailed=mysql_real_escape_string($_POST['about_us_detailed']);
		$footer_plugin=mysql_real_escape_string($_POST['footer_plugin']);
		$about_video=mysql_real_escape_string($_POST['about_video']);
		$about_video_text=mysql_real_escape_string($_POST['about_video_text']);
		
		if($about_us_breif != '' && $about_us_detailed != '')
		{
			mysql_query("update settings set about_us_breif='$about_us_breif', about_us_detailed='$about_us_detailed', footer_plugin='$footer_plugin', about_video = '$about_video', about_video_text = '$about_video_text' where id=1");
		
			echo "<script>alert('Success !!'); window.location ='about_us.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
?>