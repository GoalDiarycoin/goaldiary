<?php
	$global_title="Write Blog | $global_title";
	
	$err="";
	
	$category_id="";
	$subcategory_id="";
	$title="";
	$descr="";
	$blog="";
	
	if (isset($_POST['btn_submit']))
	{	
		$category_id=trim($_POST['category_id']);
		if(isset($_POST['subcategory_id']))
		{
			$subcategory_id=trim($_POST['subcategory_id']);
		}
		$title=trim($_POST['title']);
		$descr=trim($_POST['descr']);
		$blog=trim($_POST['blog']);
		
		if($category_id != '' && $subcategory_id != '' && $title != '' && $descr != '' && $blog != '')
		{
			$title=mysql_real_escape_string($title);
			$descr=mysql_real_escape_string($descr);
			$blog=mysql_real_escape_string($blog);
			
			if($_FILES['image']['name'] != "")
			{
				$extension = end((explode(".", $_FILES["image"]["name"])));
				
				if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension=='gif')
				{
					$user_id=$_SESSION['user_id'];
					
					mysql_query("insert into blog (category_id, subcategory_id, title, descr, blog, user_id, status_id , img, last_updated) values ($category_id, $subcategory_id, '$title', '$descr', '$blog', $user_id, $global_default_status, '', '')");
					
					$id=mysql_insert_id();
					
					$UPLOAD_DIR="images/blogs/";
					
					move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
					
					$image="$id.$extension";
					
					mysql_query("update blog set img='$image' where id=$id");
							
					echo"<script>window.location ='newblog.php?success=1'; </script>";
					exit;

				}
				else
				{
					$err="Image extension should be jpg/jpeg/JPG/JPEG/png/GIF !";
				}
			}
			else
			{
				$user_id=$_SESSION['user_id'];
				
				mysql_query("insert into blog (category_id, subcategory_id, title, descr, blog, user_id, status_id, img, last_updated) values ($category_id, $subcategory_id, '$title', '$descr', '$blog', $user_id, $global_default_status, '', '')") or die(mysql_error());
				
				$qry="select * from settings where id=1";
				$list = mysql_query($qry);
				$row=mysql_fetch_array($list);
				
				$admin_mailid=$row['admin_mailid'];
				
				$to      = $admin_mailid;
				$subject = 'New Blog';
				$message = "Title: $title";
				$headers = "From: $admin_mailid";
				
				mail($to, $subject, $message, $headers);

				echo"<script>window.location ='newblog.php?success=1'; </script>";
				exit;
			}
			
		}
		else 
		{
			if($category_id == '' )
			{
				$err="Select Category <br/>";
			}
			if($subcategory_id  == '' )
			{
				$err.="Select Sub Category <br/>";
			}
			if($title == '' )
			{
				$err.="Enter Title <br/>";
			}
			if($descr == '' )
			{
				$err.="Enter Brief Description <br/>";
			}
			if($blog == '' )
			{
				$err.="Enter Blog <br/>";
			}
		}
	}
	
	$qry="select * from category order by name asc";
	$category_list = mysql_query($qry);
	
	if($category_id!='')
	{
		$qry="select * from subcategory where category_id=$category_id order by name asc";
		$subcategory_list = mysql_query($qry);	
	}
?>