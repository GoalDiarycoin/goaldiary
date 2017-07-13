<?php
	include '../db.php';
	
	$id=$_POST['id'];
	
	mysql_query("delete from solution where id=$id");
?>