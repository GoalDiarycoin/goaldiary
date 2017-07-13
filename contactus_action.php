<?php
	$global_title="Contact Us | $global_title";
	
	$qry=mysql_query("select * from settings where id=1");
	$row=mysql_fetch_array($qry);
	
	$maps=$row['maps'];
?>