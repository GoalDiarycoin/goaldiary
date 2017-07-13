<?php
	include '../db.php';
	
	$id=$_POST['id'];
	
	$qn_sets_list=mysql_query("select * from qn_sets where sub_id=$id");
	$qn_sets_count=mysql_num_rows($qn_sets_list);
	
	if($qn_sets_count==0)
	{
		mysql_query("delete from subject where id=$id");
	}	
	else
	{
		echo "error";
	}
?>