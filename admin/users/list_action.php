<?php
	$qry="select 
		id
		,name		
		,username
		,mailid
		,phno
		,role
		,last_login
	from users order by name asc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);
?>