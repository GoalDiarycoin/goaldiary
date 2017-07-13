<?php
	$qry="select 
		id
		,name
		,(select name from category where id=subject.cat_id) as cat_name
	from subject order by name asc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);
?>