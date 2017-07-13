<?php
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	}
	else
	{
		echo "<script>window.location ='404.php'; </script>";
		exit;
	}
	
	$qry="select 
		name
		,mailid
		,phno
		,sex
		,image
		,(
			select 
				count(*) 
			from 
				blog 
			where 
				user_id=users.id 
			and 
				status_id not in (select inactive_status from settings where id=1)
			and
				status_id not in (select default_status from settings where id=1)
			and
				user_id in (select id from users where status='Active')
		) as blog_cnt
	from users where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$name=$row['name'];
	$mailid=$row['mailid'];
	$phno=$row['phno'];
	$sex=$row['sex'];
	$image=$row['image'];
	$blog_cnt=$row['blog_cnt'];
	
	$global_title="$name's Profile | $global_title";	
?>