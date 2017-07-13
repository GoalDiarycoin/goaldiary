<?php	
	$err="";
	
	$name="";
	$designation='';
	$fb='';
	$twitter='';
	$gplus='';
	$linkedin='';
	
	if (isset($_POST['btn_add']))
	{
		$name=trim($_POST['name']);
		$designation=trim($_POST['designation']);
		$fb=trim($_POST['fb']);
		$twitter=trim($_POST['twitter']);
		$gplus=trim($_POST['gplus']);
		$linkedin=trim($_POST['linkedin']);
		
		$extension = end((explode(".", $_FILES["image"]["name"])));
		
		if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
		{		
			if($name != "" && $designation != "" && $_FILES['image']['name'] != "" )
			{
				mysql_query("insert into team (name, designation, fb, twitter, gplus, linkedin, image) values ('$name', '$designation', '$fb', '$twitter', '$gplus', '$linkedin', '')") or die(mysql_error());
				
				$id=mysql_insert_id();
				
				$image="$id.$extension";
				
				mysql_query("update team set image='$image' where id=$id");
				
				$UPLOAD_DIR="../../images/team/";
				
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