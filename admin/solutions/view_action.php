<?php	
	$id=$_GET['id'];
	
	$qry="select * from solution where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	$issue=$row['issue'];
	$solution=$row['solution'];
?>