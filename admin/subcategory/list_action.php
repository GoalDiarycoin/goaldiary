<?php
	$qry="select 
		id
		,name
		,descr
		,image
		,banner
		,(select name from category where id=subcategory.category_id) as stream_name
	from subcategory order by name asc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);
?>