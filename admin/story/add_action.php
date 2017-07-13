<?php	
	$err="";
	
	$title="";
	$descr="";
	$story="";
	
	if (isset($_POST['btn_add']))
	{	
		$title=trim($_POST['title']);
		$descr=trim($_POST['descr']);
		$story=trim($_POST['story']);
		
		$extension = end((explode(".", $_FILES["image"]["name"])));
		
		if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension=='gif')
		{
			if($title != '' && $descr != '' && $story != '' && $_FILES['image']['name'] != "")
			{
				$title=mysql_real_escape_string($title);
				$descr=mysql_real_escape_string($descr);
				$story=mysql_real_escape_string($story);
				
				$user_id=$_SESSION['user_id'];
				mysql_query("insert into story (title, descr, story, image) values ('$title', '$descr', '$story', '')") or die(mysql_error());
				
				$id=mysql_insert_id();
				
				$UPLOAD_DIR="../../images/story/";
				
				move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
				
				$image="$id.$extension";
				
				mysql_query("update story set image='$image' where id=$id");
						
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