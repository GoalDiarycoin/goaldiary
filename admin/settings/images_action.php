<?php
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		if($_FILES['logo']['name'] != "")
		{
			$extension = end((explode(".", $_FILES["logo"]["name"])));
			
			if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
			{
				$UPLOAD_DIR="../../images/";
				
				move_uploaded_file($_FILES['logo']['tmp_name'], $UPLOAD_DIR."logo.png");
			}
			else
			{
				$err.="Extension of logo should be jpg/JPEG/JPG/jpeg/png/PNG/GIF/gif";
			}
		}
		
		if($_FILES['favicon']['name'] != "")
		{
			$extension = end((explode(".", $_FILES["favicon"]["name"])));
			
			if ($extension == 'ico')
			{
				$UPLOAD_DIR="../../images/";
				
				move_uploaded_file($_FILES['favicon']['tmp_name'], $UPLOAD_DIR."favicon.ico");
			}
			else
			{
				$err.="Extension of Favicon should be ico";
			}
		}
		
		if($_FILES['blog']['name'] != "")
		{
			$extension = end((explode(".", $_FILES["blog"]["name"])));
			
			if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
			{
				$UPLOAD_DIR="../../images/category/";
				
				move_uploaded_file($_FILES['blog']['tmp_name'], $UPLOAD_DIR."blog_banner.jpg");
			}
			else
			{
				$err.="Extension of Blog banner image should be jpg/JPEG/JPG/jpeg/png/PNG/GIF/gif";
			}
		}
		
		if($_FILES['user']['name'] != "")
		{
			$extension = end((explode(".", $_FILES["user"]["name"])));
			
			if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
			{
				$UPLOAD_DIR="../../images/";
				
				move_uploaded_file($_FILES['user']['tmp_name'], $UPLOAD_DIR."user_banner.jpg");
			}
			else
			{
				$err.="Extension of User banner image should be jpg/JPEG/JPG/jpeg/png/PNG/GIF/gif";
			}
		}
		
		if($_FILES['contact']['name'] != "")
		{
			$extension = end((explode(".", $_FILES["contact"]["name"])));
			
			if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
			{
				$UPLOAD_DIR="../../images/";
				
				move_uploaded_file($_FILES['contact']['tmp_name'], $UPLOAD_DIR."contact-banner.jpg");
			}
			else
			{
				$err.="Extension of Contact banner image should be jpg/JPEG/JPG/jpeg/png/PNG/GIF/gif";
			}
		}
		
		if($_FILES['about']['name'] != "")
		{
			$extension = end((explode(".", $_FILES["about"]["name"])));
			
			if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
			{
				$UPLOAD_DIR="../../images/";
				
				move_uploaded_file($_FILES['about']['tmp_name'], $UPLOAD_DIR."about_us_banner.jpg");
			}
			else
			{
				$err.="Extension of About banner image should be jpg/JPEG/JPG/jpeg/png/PNG/GIF/gif";
			}
		}
		
		if($_FILES['aboutvideo']['name'] != "")
		{
			$extension = end((explode(".", $_FILES["aboutvideo"]["name"])));
			
			if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
			{
				$UPLOAD_DIR="../../images/";
				
				move_uploaded_file($_FILES['aboutvideo']['tmp_name'], $UPLOAD_DIR."abt-video.jpg");
			}
			else
			{
				$err.="Extension of abuot video image should be jpg/JPEG/JPG/jpeg/png/PNG/GIF/gif";
			}
		}
		
		if($_FILES['aboutmain']['name'] != "")
		{
			$extension = end((explode(".", $_FILES["aboutmain"]["name"])));
			
			if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
			{
				$UPLOAD_DIR="../../images/";
				
				move_uploaded_file($_FILES['aboutmain']['tmp_name'], $UPLOAD_DIR."about-img.jpg");
			}
			else
			{
				$err.="Extension of about main image should be jpg/JPEG/JPG/jpeg/png/PNG/GIF/gif";
			}
		}
		
		if ($err=="")
		{
			echo "<script>alert('Success !!'); window.location ='images.php'; </script>";
		}
	}
?>