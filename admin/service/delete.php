<?php
	include '../db.php';
	
	$id=$_POST['id'];
	
	mysql_query("delete from service where id=$id");
?>