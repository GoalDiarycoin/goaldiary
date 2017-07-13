<?php
	$qry="select 
		id
		,name
		,link
	from quicklinks order by name asc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);
?>