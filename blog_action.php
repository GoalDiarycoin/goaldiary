<?php 
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		$details=mysql_query("select name,banner, descr, details from category where id=$id");
		$row=mysql_fetch_array($details);
		$name=$row['name'];
		$descr=$row['descr'];
		$details=$row['details'];
		$banner=$row['banner'];
		
		$query="
			select 
				title
				,(select name from users where id=blog.user_id) as creator_name
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
				category_id=$id
			and
				status_id not in (select inactive_status from settings where id=1)
			and
				status_id not in (select default_status from settings where id=1)
			and
				user_id in (select id from users where status='Active' and role=1)
			order by timestamp desc
		";
		$main_blog_list=mysql_query($query);
		$main_blog_list_rows=mysql_num_rows($main_blog_list);
		
		$global_title="Blogs on $name | $global_title";
	}
	else
	{
		$query="select * from category";
		$right_cat_list=mysql_query($query);
		
		$query="
			select 
				title
				,(select name from users where id=blog.user_id) as creator_name
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
				status_id not in (select inactive_status from settings where id=1)
			and
				status_id not in (select default_status from settings where id=1)
			and
				user_id in (select id from users where status='Active' and role=1)
			order by timestamp desc
			LIMIT 5
		";
		$main_blog_list=mysql_query($query);
		$main_blog_list_rows=mysql_num_rows($main_blog_list);
		
		$banner="blog_banner.jpg";
		
		$global_title="Blogs | $global_title";
	}
?>