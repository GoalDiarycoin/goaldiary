<?php
	$qry=mysql_query("select * from settings where id=1");
	$row=mysql_fetch_array($qry);
	
	$contact_side_bar_about_us_breief=$row['about_us_breif'];
	$contact_side_bar_admin_phno=$row['admin_phno'];
	$contact_side_bar_admin_mailid=$row['admin_mailid'];
	$contact_side_bar_admin_name=$row['admin_name'];
	$contact_side_bar_street=$row['street'];
	$contact_side_bar_city=$row['city'];
	$contact_side_bar_state=$row['state'];
	$contact_side_bar_pin=$row['pin'];
	$contact_side_bar_country=$row['country'];
?>