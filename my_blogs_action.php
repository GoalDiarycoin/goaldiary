<?php
	if(isset($_GET['id']))
	{
		$user_id=$_GET['id'];
		
		$query="select name from users where id = $user_id";
		$list = mysql_query($query);
		$row=mysql_fetch_array($list);
		
		$name=$row['name'];
		
		$global_title="$name's Blogs | $global_title";
		
		$query="
			select 
				title
				,(select name from users where id=blog.user_id) as creator_name
				,(select name from status where id=blog.status_id) as status_name
				,img
				,id
				,descr
				,timestamp
				,user_id
				,(select count(*) from blog_comments where blog_id = blog.id) as comment_cnt
				,(select count(*) from blog_view where blog_id = blog.id) as view_cnt
			from 
				blog 
			where 
					user_id in (select id from users where status='Active' and id=$user_id)
				and
					status_id not in (select inactive_status from settings where id=1)
				and
					status_id not in (select default_status from settings where id=1)
			order by timestamp desc
		";
		$main_blog_list=mysql_query($query);
		$main_blog_list_rows=mysql_num_rows($main_blog_list);
	}
	else
	{
		$user_id=$_SESSION['user_id'];
		$global_title="My Blogs | $global_title";
		
		$query="
			select 
				title
				,(select name from users where id=blog.user_id) as creator_name
				,(select name from status where id=blog.status_id) as status_name
				,img
				,id
				,descr
				,timestamp
				,user_id
				,(select count(*) from blog_comments where blog_id = blog.id) as comment_cnt
				,(select count(*) from blog_view where blog_id = blog.id) as view_cnt
			from 
				blog 
			where 
				user_id in (select id from users where status='Active' and id=$user_id)
			order by timestamp desc
		";
		$main_blog_list=mysql_query($query);
		$main_blog_list_rows=mysql_num_rows($main_blog_list);
	}
	
	$query="select * from category";
	$right_cat_list=mysql_query($query);
?>