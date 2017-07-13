<?php
	$qry="select 
		issue
		,id
		,timestamp
		,(select name from user where id=solution.user_id) as creator
		,user_id
	from solution order by timestamp desc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);
?>