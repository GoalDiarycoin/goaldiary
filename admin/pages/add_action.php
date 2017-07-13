<?php	
	$err="";
	
	$title="";
	$descr="";
	$page="";
	$status_id="";
	
	if (isset($_POST['btn_add']))
	{	
		$title=trim($_POST['title']);
		$descr=trim($_POST['descr']);
		$page=trim($_POST['page']);
		
		$extension = end((explode(".", $_FILES["image"]["name"])));
		
		if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension=='gif')
		{
			if($title != '' && $descr != '' && $page != '' && $_FILES['image']['name'] != "")
			{
				$title=mysql_real_escape_string($title);
				$descr=mysql_real_escape_string($descr);
				$page=mysql_real_escape_string($page);
			
				mysql_query("insert into page (title, descr, page, image) values ('$title', '$descr', '$page', '')") or die(mysql_error());
				
				$id=mysql_insert_id();
				
				$UPLOAD_DIR="../../images/page/";
				
				move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
				
				$img="$id.$extension";
				
				mysql_query("update page set image='$img' where id=$id");
						
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