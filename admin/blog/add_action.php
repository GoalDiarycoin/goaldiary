<?php	
	$err="";
	
	$category_id="";
	$subcategory_id="";
	$title="";
	$descr="";
	$blog="";
	$status_id="";
	
	if (isset($_POST['btn_add']))
	{	
		$category_id=trim($_POST['category_id']);
		$subcategory_id=trim($_POST['subcategory_id']);
		$title=mysql_real_escape_string($_POST['title']);
		$descr=mysql_real_escape_string($_POST['descr']);
		$blog=mysql_real_escape_string($_POST['blog']);
		$status_id=trim($_POST['status_id']);
		
		$extension = end((explode(".", $_FILES["image"]["name"])));
		
		if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension=='gif')
		{
			if($category_id != '' && $subcategory_id != '' && $title != '' && $descr != '' && $blog != '' && $_FILES['image']['name'] != "")
			{
				$title=mysql_real_escape_string($title);
				$descr=mysql_real_escape_string($descr);
				$blog=mysql_real_escape_string($blog);
				
				$user_id=$_SESSION['user_id'];
				mysql_query("insert into blog (category_id, subcategory_id, title, descr, blog, user_id, status_id) values ($category_id, $subcategory_id, '$title', '$descr', '$blog', $user_id, $status_id)");
				
				$id=mysql_insert_id();
				
				$UPLOAD_DIR="../../images/blogs/";
				
				move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
						
				echo"<script>alert('Success !!'); window.location ='view.php?id=$id'; </script>";
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