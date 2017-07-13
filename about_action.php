<?php
	$global_title="About Us | $global_title";
	
	$details=mysql_query("select * from settings where id=1");
	$row=mysql_fetch_array($details);
	
	$about_us_brief=$row['about_us_breif'];
	$title=$row['title'];
	$about_video=$row['about_video'];
	$about_video_text=$row['about_video_text'];
	
	$team_list=mysql_query("select * from team order by name asc");
?>