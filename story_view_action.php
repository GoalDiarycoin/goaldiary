<?php
	if(! isset($_GET['id']))
	{
		echo "<script>window.location ='404.php'; </script>";
		exit;
	}
	
	$id=$_GET['id'];
	
	$query="
		select 
			title
			,timestamp
			,image
			,story
		from 
			story
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
	$timestamp=$row['timestamp'];
	$image=$row['image'];
	$story=$row['story'];
	
	$query="
		select
			(select users.name from users where id=story_comments.user_id) as creator_name
			,timestamp
			,comments
			,(select users.image from users where id=story_comments.user_id) as creator_image
		from
			story_comments
		where 
			story_id=$id
	";
	$comment_list=mysql_query($query);
	$comment_list_rows=mysql_num_rows($comment_list);
	
	$global_title="$title | $global_title";
?>
