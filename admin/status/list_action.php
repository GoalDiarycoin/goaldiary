<?php
	$qry="select 
		id
		,name
		,(select default_status from settings where id=1) as default_status
		,(select inactive_status from settings where id=1) as inactive_status
		,(select trending_status from settings where id=1) as trending_status
	from status order by name asc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);
?>