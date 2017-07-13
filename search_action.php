<?php
	if(! isset($_GET['qry']))
	{
		echo "<script>window.location ='404.php'; </script>";
		exit;
	}
	
	$qry=$_GET['qry'];
	
	$global_title="$qry | $global_title";
	
	$query="
		select 
			title
			,(select name from users where id=blog.user_id) as creator_name
			,(select name from status where id=blog.status_id) as status_name
			,img
			,id
			,descr
			,timestamp
		from 
			blog 
		where 
				status_id not in (select inactive_status from settings where id=1)
			and
				status_id not in (select default_status from settings where id=1)
			and
				user_id in (select id from users where status='Active')
			and 
				(title like '%$qry%' or descr like '%$qry%' or blog like '%$qry%')
		order by timestamp desc
	";
	$main_blog_list=mysql_query($query);
	$main_blog_list_rows=mysql_num_rows($main_blog_list);
?>