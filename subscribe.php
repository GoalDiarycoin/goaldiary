<?php
	include 'db.php';
	
	$mailid=$_POST['mailid'];
	
	mysql_query("insert into subscriber (mailid) values ('$mailid') ");
?>