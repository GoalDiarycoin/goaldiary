<?php	
	$qry="select 
		id
		,title
		,descr
		,timestamp
		,image
	from story order by timestamp desc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);
?>