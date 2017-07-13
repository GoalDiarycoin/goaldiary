<?php	
	$id=$_GET['id'];
	
	$qry="select * from category where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	$name=$row['name'];
	$descr=$row['descr'];
	$details=$row['details'];
	$image=$row['image'];
	$banner=$row['banner'];
	
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		$name=trim($_POST['name']);
		$descr=trim($_POST['descr']);
		$details=mysql_real_escape_string($_POST['details']);
		
		if($name != "" && $descr != "" )
		{
			mysql_query("update category set name='$name', descr='$descr', details='$details' where id=$id");
			
			if($_FILES['image']['name'] != "")
			{
				$extension = end((explode(".", $_FILES["image"]["name"])));
				
				if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
				{
					$UPLOAD_DIR="../../images/category/";
					
					move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
					
					$image="$id.$extension";
					
					mysql_query("update category set image='$image' where id=$id");
				}
			}

			if($_FILES['banner']['name'] != "")
			{
				$extension = end((explode(".", $_FILES["banner"]["name"])));
				
				if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
				{
					$UPLOAD_DIR="../../images/category/";
					
					move_uploaded_file($_FILES['banner']['tmp_name'], $UPLOAD_DIR."banner_".$id.".".$extension);
					
					$image="banner_$id.$extension";
					
					mysql_query("update category set banner='$image' where id=$id");
				}
			}
		
			echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
			exit;
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
	
?>