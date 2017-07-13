<?php
	$query="
		select 
			title
			,category_id
			,subcategory_id
			,(select name from category where id=blog.category_id) cateory_name
			,(select name from subcategory where id=blog.subcategory_id) sub_cateory_name
			,(select image from users where id=blog.user_id) as creator_img
			,(select name from users where id=blog.user_id) as creator_name
			,user_id
			,id
			,timestamp
		from 
			blog
		where 
			status_id not in (select inactive_status from settings where id=1)
		and
			status_id not in (select default_status from settings where id=1)
		and
			user_id in (select id from users where status='Active')
		order by timestamp desc
		LIMIT 5
	";
	$right_blog_list=mysql_query($query);
	$right_blog_list_rows=mysql_num_rows($right_blog_list);
	
	$query="
		select 
			title
			,category_id
			,subcategory_id
			,user_id
			,(select name from category where id=blog.category_id) cateory_name
			,(select name from subcategory where id=blog.subcategory_id) sub_cateory_name
			,(select image from users where id=blog.user_id) as creator_img
			,(select name from users where id=blog.user_id) as creator_name
			,id
			,timestamp
			,img
		from 
			blog
		where 
			status_id not in (select inactive_status from settings where id=1)
		and
			status_id not in (select default_status from settings where id=1)
		and 
			status_id in (select trending_status from settings where id=1)
		and
			user_id in (select id from users where status='Active')
		order by timestamp desc
		LIMIT 5
	";
	$right_trending_blog_list=mysql_query($query);
	$right_trending_blog_list_rows=mysql_num_rows($right_trending_blog_list);
	
	if(isset($_GET['id']) && $page_url == 'blog.php')
	{
		$query="select 
			name
			,id
			,(select count(*) from blog where subcategory_id=subcategory.id and status_id not in (select inactive_status from settings where id=1) and status_id not in (select default_status from settings where id=1)) as cnt
		from subcategory where category_id=$id";
		$right_cat_list=mysql_query($query);
	}
	else
	{		
		$query="select 
			name
			,id
			,(select count(*) from blog where category_id=category.id and status_id not in (select inactive_status from settings where id=1) and status_id not in (select default_status from settings where id=1)) as cnt
		from category";
		$right_cat_list=mysql_query($query);
	}
	
	$query="
		select
			(select users.name from users where id=blog_comments.user_id) as creator_name
			,timestamp
			,comments
			,blog_id
			,(select users.image from users where id=blog_comments.user_id) as creator_image
		from
			blog_comments
		where
			blog_id in (select id from blog where status_id not in (select inactive_status from settings where id=1) and status_id not in (select default_status from settings where id=1))
		order by timestamp desc
		LIMIT 5
	";
	$right_comment_list=mysql_query($query);
	$right_comment_list_rows=mysql_num_rows($right_comment_list);
	
	$query="
		select
			id
			,name
			,timestamp
		from
			tags
		order by timestamp desc
	";
	$right_tags_list=mysql_query($query);
	$right_tags_list_rows=mysql_num_rows($right_tags_list);
	
	$query="
		select 
			distinct b.month_year
			,b.month
			,b.year
			,(select count(*) from blog where (CONCAT (monthname(timestamp), ' (' ,YEAR(timestamp), ')' ))= b.month_year) as cnt
			,b.timestamp
		from
		(
			select
				 (CONCAT (monthname(timestamp), ' (' ,YEAR(timestamp), ')' )) as month_year
				 ,monthname(timestamp) as month
				 ,year (timestamp) as year
				 ,timestamp
			from
				blog
			where
				status_id not in (select inactive_status from settings where id=1)
			and
				status_id not in (select default_status from settings where id=1)
			and
				user_id in (select id from users where status='Active')
			order by timestamp desc
		) b
		group by b.month_year
		order by b.timestamp desc
	";
	$right_archive_list=mysql_query($query) or die (mysql_error());
	$right_archive_list_rows=mysql_num_rows($right_archive_list);
?>