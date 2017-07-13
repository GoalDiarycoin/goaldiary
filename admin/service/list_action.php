<?php
	$qry="select * from service order by name asc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);
?>