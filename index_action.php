<?php
	$slideshow_list=mysql_query("select * from slideshow order by sort asc");
	$slideshow_list_rows = mysql_num_rows($slideshow_list);
	
	$query="
		select
			*
		from category
	";
	$home_category_list=mysql_query($query);
	
	$query="
		select 
			title
			,id
			,image
			,descr
			,timestamp
		from 
			story
		order by timestamp desc
		LIMIT 10
	";
	$home_latest_stories_list=mysql_query($query);
	$home_latest_stories_list_rows=mysql_num_rows($home_latest_stories_list);
?>