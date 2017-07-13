<?php	
	$err="";
	
	$id=$_GET['id'];
	
	$qry="select * from blog where id=$id";
	$details = mysql_query($qry);
	$row=mysql_fetch_array($details);
	
	$category_id=$row['category_id'];
	$subcategory_id=$row['subcategory_id'];
	$title=$row['title'];
	$descr=$row['descr'];
	$blog=$row['blog'];
	$image=$row['img'];
	$status_id=$row['status_id'];
	
	if (isset($_POST['btn_update']))
	{	
		$category_id=trim($_POST['category_id']);
		$subcategory_id=trim($_POST['subcategory_id']);
		$title=mysql_real_escape_string(trim($_POST['title']));
		$descr=mysql_real_escape_string(trim($_POST['descr']));
		$blog=mysql_real_escape_string(trim($_POST['blog']));
		$status_id=trim($_POST['status_id']);
		
		if($category_id != '' && $subcategory_id != '' && $title != '' && $descr != '' && $blog != '' )
		{
			if($_FILES['image']['name'] != "")
			{
				$extension = end((explode(".", $_FILES["image"]["name"])));
				
				if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension=='gif')
				{
					$UPLOAD_DIR="../../images/blogs/";
					
					move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
					
					$image="$id.$extension";
					
					mysql_query("update blog set img='$image' where id=$id");
				}
				else
				{
					$err="Image extension should be jpg/jpeg/JPG/JPEG/png/GIF !";
				}
			}
			
			if($err=="")
			{
				mysql_query("update blog set category_id=$category_id , subcategory_id=$subcategory_id, title='$title', descr='$descr', blog='$blog', status_id=$status_id where id=$id");
				
				echo"<script>alert('Success !!'); window.location ='view.php?id=$id'; </script>";
			}
		}
		else
		{
			$err="Enter Required Fields !";
		}
	}
	
	$qry="select * from status";
	$status_list = mysql_query($qry);
	
	$qry="select * from category order by name asc";
	$category_list = mysql_query($qry);
	
	if($category_id!='')
	{
		$qry="select * from subcategory where category_id=$category_id order by name asc";
		$subcategory_list = mysql_query($qry);	
	}
?>