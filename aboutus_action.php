<?php
	$global_title="About Us | $global_title";
	
	$qry=mysql_query("select * from settings where id=1");
	$row=mysql_fetch_array($qry);
	
	$about_us_detailed=$row['about_us_detailed'];
	
?>