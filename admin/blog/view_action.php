<?php	
	$id=$_GET['id'];
	
	$query="
		select 
			title
			,category_id
			,subcategory_id
			,(select name from category where id=blog.category_id) category_name
			,(select name from subcategory where id=blog.subcategory_id) sub_category_name
			,timestamp
			,(select name from users where id=blog.user_id) as creator_name
			,(select name from status where id=blog.status_id) as status_name
			,img
			,blog
			,descr
		from 
			blog 
		where 
			id=$id 
	";
	$details=mysql_query($query);
	$cnt=mysql_num_rows($details);
	
	if($cnt!=1)
	{
		echo"<script>window.location ='404.php'; </script>";
		exit;
	}
	
	$row=mysql_fetch_array($details);
	
	$title=$row['title'];
	$descr=$row['descr'];
	$category_id=$row['category_id'];
	$category_name=$row['category_name'];
	$subcategory_id=$row['subcategory_id'];
	$sub_category_name=$row['sub_category_name'];
	$status_name=$row['status_name'];
	$timestamp=$row['timestamp'];
	$creator_name=$row['creator_name'];
	$image=$row['img'];
	$blog=$row['blog'];
?>