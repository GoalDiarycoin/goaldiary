<?php	
	$qry="select 
		id
		,title
		,descr
		,page
		,image
		,timestamp
	from page order by timestamp desc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);
?>