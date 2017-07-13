<?php	
	$id=$_GET['id'];
	
	$qry="select * from subcategory where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	$name=$row['name'];
	$stream_id=$row['category_id'];
	$descr=$row['descr'];
	$image=$row['image'];
	$banner=$row['banner'];
	
	
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		$stream_id=trim($_POST['stream_id']);		
		$name=trim($_POST['name']);		
		$descr=trim($_POST['descr']);
		
		if($stream_id!='' && $name!="")
		{
			mysql_query("update subcategory set category_id=$stream_id, name='$name', descr='$descr' where id=$id");
			
			if($_FILES['image']['name'] != "")
			{
				$extension = end((explode(".", $_FILES["image"]["name"])));
				
				if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
				{
					$UPLOAD_DIR="../../images/subcategory/";
					
					move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
					
					$image="$id.$extension";
					
					mysql_query("update subcategory set image='$image' where id=$id");
				}
			}

			if($_FILES['banner']['name'] != "")
			{
				$extension = end((explode(".", $_FILES["banner"]["name"])));
				
				if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
				{
					$UPLOAD_DIR="../../images/subcategory/";
					
					move_uploaded_file($_FILES['banner']['tmp_name'], $UPLOAD_DIR."banner_".$id.".".$extension);
					
					$image="banner_$id.$extension";
					
					mysql_query("update subcategory set banner='$image' where id=$id");
				}
			}
		
			echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
	
	$qry="select * from category order by name asc";
	$stream_list = mysql_query($qry);
?>