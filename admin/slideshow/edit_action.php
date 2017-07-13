<?php	
	$id=$_GET['id'];
	
	$qry="select * from slideshow where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$name=$row['name'];
	$descr=$row['descr'];
	$sort=$row['sort'];
	$link=$row['link'];
	$extension=$row['ext'];
	
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		$name=trim($_POST['name']);
		$descr=trim($_POST['descr']);
		$sort=trim($_POST['sort']);
		$link=trim($_POST['link']);
		
		if ($_FILES['image']['name'] != "" )
		{
			$extension = end((explode(".", $_FILES["image"]["name"])));
			
			if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension=='gif')
			{	
				if($name != "" && $descr != "" && $link != "")
				{
					mysql_query("update slideshow set name='$name', descr='$descr', link = '$link' , ext = '$extension', sort= $sort where id=$id");
					
					if ($_FILES['image']['name'] != "" )
					{
						$UPLOAD_DIR="../../images/slideshow/";
					
						move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
					}
				
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
		else
		{	
			if($name != "" && $descr != "" && $link != "")
			{
				mysql_query("update slideshow set name='$name', descr='$descr', link = '$link' , ext = '$extension', sort= $sort where id=$id");
				
				if ($_FILES['image']['name'] != "" )
				{
					$UPLOAD_DIR="../../images/slideshow/";
				
					move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
				}
			
				echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
			
			}
			else 
			{
				$err="Enter Required Fields !";
			}
		}
	}
	
?>