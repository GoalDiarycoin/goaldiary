<?php	
	$err="";
	
	$id=$_GET['id'];
	
	$qry="select * from page where id=$id";
	$details = mysql_query($qry);
	$row=mysql_fetch_array($details);
	
	$title=$row['title'];
	$descr=$row['descr'];
	$page=$row['page'];
	$image=$row['image'];
	
	if (isset($_POST['btn_update']))
	{	
		$title=trim($_POST['title']);
		$descr=trim($_POST['descr']);
		$page=trim($_POST['page']);
		
		if($title != '' && $descr != '' && $page != '' )
		{
			$title=mysql_real_escape_string($title);
			$descr=mysql_real_escape_string($descr);
			$page=mysql_real_escape_string($page);
			
			if($_FILES['image']['name'] != "")
			{
				$extension = end((explode(".", $_FILES["image"]["name"])));
				
				if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension=='gif')
				{
					$UPLOAD_DIR="../../images/page/";
					
					move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
					
					$image="$id.$extension";
					
					mysql_query("update page set image='$image' where id=$id");
				}
				else
				{
					$err="Image extension should be jpg/jpeg/JPG/JPEG/png/GIF !";
				}
			}
			
			if($err=="")
			{
				mysql_query("update page set title='$title', descr='$descr', page='$page' where id=$id");
				
				echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
			}
		}
		else
		{
			$err="Enter Required Fields !";
		}
	}
?>