<?php
	include '../db.php';
	
	$id=$_POST['id'];
	
	mysql_query("delete from story_comments where id=$id");
?>