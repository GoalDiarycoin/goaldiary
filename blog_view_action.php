<?php
	if(! isset($_GET['id']))
	{
		echo "<script>window.location ='404.php'; </script>";
		exit;
	}
	
	$id=$_GET['id'];
	
	if(isset($_GET['myblogs']) && isset($_SESSION['user_id']))
	{
		$user_id=$_SESSION['user_id'];
	
		$query="
			select 
				title
				,category_id
				,subcategory_id
				,(select name from category where id=blog.category_id) category_name
				,(select name from subcategory where id=blog.subcategory_id) sub_category_name
				,timestamp
				,(select name from users where id=blog.user_id) as creator_name
				,img
				,blog
				,(select count(*) from blog_comments where blog_id = blog.id) as comment_cnt
				,(select count(*) from blog_view where blog_id = blog.id) as view_cnt
			from 
				blog 
			where 
					id=$id 
				and 
					user_id in (select id from users where status='Active' and id=$user_id)
		";
	}
	else
	{
		$query="
			select 
				title
				,category_id
				,subcategory_id
				,(select name from category where id=blog.category_id) category_name
				,(select name from subcategory where id=blog.subcategory_id) sub_category_name
				,timestamp
				,(select name from users where id=blog.user_id) as creator_name
				,img
				,blog
				,(select count(*) from blog_comments where blog_id = blog.id) as comment_cnt
				,(select count(*) from blog_view where blog_id = blog.id) as view_cnt
			from 
				blog 
			where 
					id=$id 
				and 
					status_id not in (select inactive_status from settings where id=1) 
				and 
					status_id not in (select default_status from settings where id=1) 
				and 
					user_id in (select id from users where status='Active')
			
		";
	}
	$details=mysql_query($query);
	$cnt=mysql_num_rows($details);
	
	if($cnt!=1)
	{
		echo"<script>window.location ='404.php'; </script>";
		exit;
	}
	
	$row=mysql_fetch_array($details);
	
	$title=$row['title'];
	$category_id=$row['category_id'];
	$category_name=$row['category_name'];
	$subcategory_id=$row['subcategory_id'];
	$sub_category_name=$row['sub_category_name'];
	$timestamp=$row['timestamp'];
	$creator_name=$row['creator_name'];
	$image=$row['img'];
	$blog=$row['blog'];
	$comment_cnt=$row['comment_cnt'];
	$view_cnt=$row['view_cnt'];
	
	$global_title="$title | $global_title";
	
	$query="
		select
			(select users.name from users where id=blog_comments.user_id) as creator_name
			,timestamp
			,comments
			,(select users.image from users where id=blog_comments.user_id) as creator_image
		from
			blog_comments
		where 
			blog_id=$id
	";
	$comment_list=mysql_query($query);
	$comment_list_rows=mysql_num_rows($comment_list);
?>

<?php

	function getUserIP()
	{
	    $client  = @$_SERVER['HTTP_CLIENT_IP'];
	    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	    $remote  = $_SERVER['REMOTE_ADDR'];

	    if(filter_var($client, FILTER_VALIDATE_IP))
	    {
	        $ip = $client;
	    }
	    elseif(filter_var($forward, FILTER_VALIDATE_IP))
	    {
	        $ip = $forward;
	    }
	    else
	    {
	        $ip = $remote;
	    }

	    return $ip;
	}


	$user_ip = getUserIP();

	//echo $user_ip; // Output IP address [Ex: 177.87.193.134]

	$query="select * from blog_view where blog_id=$id and ip='$user_ip'";
	$blog_view_list=mysql_query($query);
	$blog_view_list_rows=mysql_num_rows($blog_view_list);
	
	if($blog_view_list_rows==0)
	{
		mysql_query("insert into blog_view (blog_id, ip) values ($id, '$user_ip')");
	}
?>