<?php
	include '../db.php';
	
	$id=$_POST['id'];
	
	mysql_query("delete from page where id=$id");
?>