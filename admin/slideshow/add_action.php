<?php	
	$err="";
	
	$name="";
	$descr='';
	$sort='';
	$link='';
	
	if (isset($_POST['btn_add']))
	{
		$name=trim($_POST['name']);
		$descr=trim($_POST['descr']);
		$sort=trim($_POST['sort']);
		$link=trim($_POST['link']);
		
		$extension = end((explode(".", $_FILES["image"]["name"])));
		
		if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
		{		
			if($name != "" && $descr != "" && $link != "" && $_FILES['image']['name'] != "" )
			{
				mysql_query("insert into slideshow (name, descr, sort, link, ext) values ('$name', '$descr', $sort, '$link', '$extension')");
				
				$id=mysql_insert_id();
				
				$UPLOAD_DIR="../../images/slideshow/";
				
				move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
			
				echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
			
			}
			else 
			{
				$err="Enter Required Fields !";
			}
		}
		else
		{
			$err="Image extension should be jpg/jpeg/JPG/JPEG/png/GIF !";
		}
	}
	
?>