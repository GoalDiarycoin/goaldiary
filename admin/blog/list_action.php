<?php
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		$qry="select name from user where id = $id";
		$details = mysql_query($qry);
		$row=mysql_fetch_array($details);
		$name=$row['name'];
		
		$qry="select 
			id
			,title
			,descr
			,(select name from subcategory where id=blog.subcategory_id) as subcategory_name
			,(select name from category where id=(select category_id from subcategory where id=blog.subcategory_id)) as category_name
			,(select name from users where id=blog.user_id) as created_by
			,(select name from status where id=blog.status_id) as status
			,status_id
			,timestamp
		from blog where user_id=$id order by timestamp desc";
		$list = mysql_query($qry);
		$list_rows = mysql_num_rows($list);

	}
	else if(isset($_GET['status_id']))
	{
		$status_id=$_GET['status_id'];
		
		$qry="select 
			id
			,title
			,descr
			,(select name from subcategory where id=blog.subcategory_id) as subcategory_name
			,(select name from category where id=(select category_id from subcategory where id=blog.subcategory_id)) as category_name
			,(select name from users where id=blog.user_id) as created_by
			,(select name from status where id=blog.status_id) as status
			,status_id
			,timestamp
		from blog where status_id=$status_id order by timestamp desc";
		$list = mysql_query($qry);
		$list_rows = mysql_num_rows($list);
	}
	else
	{	
		$qry="select 
			id
			,title
			,descr
			,(select name from subcategory where id=blog.subcategory_id) as subcategory_name
			,(select name from category where id=(select category_id from subcategory where id=blog.subcategory_id)) as category_name
			,(select name from users where id=blog.user_id) as created_by
			,(select name from status where id=blog.status_id) as status
			,status_id
			,timestamp
		from blog order by timestamp desc";
		$list = mysql_query($qry);
		$list_rows = mysql_num_rows($list);
	}
?>