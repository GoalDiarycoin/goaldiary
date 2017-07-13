<?php
	include '../db.php';
	
	$id=$_POST['id'];
	
	mysql_query("delete from users where id=$id");
?>