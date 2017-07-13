<?php 
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		$query="
			select 
				title
				,(select name from users where id=blog.user_id) as creator_name
				,img
				,id
				,timestamp
				,user_id
				,(select count(*) from blog_comments where blog_id = blog.id) as comment_cnt
				,(select count(*) from blog_view where blog_id = blog.id) as view_cnt
			from 
				blog 
			where 
				subcategory_id=$id 
			and 
				status_id not in (select inactive_status from settings where id=1)
			and
				status_id not in (select default_status from settings where id=1)
			and
				user_id in (select id from users where status='Active')
			order by timestamp desc
		";
		$main_blog_list=mysql_query($query);
		$main_blog_list_rows=mysql_num_rows($main_blog_list);
		
		$query="
			select 
				name
				,(select name from category where id=subcategory.category_id) as category_name
				,category_id
				,banner
			from subcategory where id = $id
		";
		$details=mysql_query($query);
		$row=mysql_fetch_array($details);
		
		$subcategory_name=$row['name'];
		$category_name=$row['category_name'];
		$category_id=$row['category_id'];
		$banner=$row['banner'];
		
		$global_title="Blogs on $subcategory_name | $global_title";
	}
	else if(isset($_GET['archive']))
	{
		$id=$_GET['archive'];
		$year=$_GET['year'];
		
		$query="
			select 
				title
				,(select name from users where id=blog.user_id) as creator_name
				,img
				,id
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
				user_id in (select id from users where status='Active')
			and
				monthname(timestamp)= '$id'
			and 
				year(timestamp) = '$year'
			order by timestamp desc
		";
		$main_blog_list=mysql_query($query);
		$main_blog_list_rows=mysql_num_rows($main_blog_list);
		
		$banner="blog_banner.jpg";
		
		$global_title="Blogs from $id ($year) | $global_title";
	}
	else
	{
		$query="
			select 
				title
				,(select name from users where id=blog.user_id) as creator_name
				,img
				,id
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
				user_id in (select id from users where status='Active')
			order by timestamp desc
		";
		$main_blog_list=mysql_query($query);
		$main_blog_list_rows=mysql_num_rows($main_blog_list);
		
		$banner="blog_banner.jpg";
		
		$global_title="Blogs | $global_title";
	}
?>