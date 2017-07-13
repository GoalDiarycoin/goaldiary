<?php
	$qry="select 
		id
		,mailid
	from subscriber order by timestamp asc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);
?>