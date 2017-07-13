<?php
	
	$qry="select * from subcategory";
	$category_list = mysql_query($qry);
	$category_list_rows = mysql_num_rows($category_list);
	
	$qry="select * from category";
	$level_list = mysql_query($qry);
	$level_list_rows = mysql_num_rows($level_list);
	
	
	$qry="select * from users";
	$customer_list = mysql_query($qry);
	$customer_list_rows = mysql_num_rows($customer_list);
	
	
	$qry="select * from blog";
	$exam_list = mysql_query($qry);
	$blog_list_rows = mysql_num_rows($exam_list);
	/*
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$assigned_mandatory=$row['assigned_mandatory'];
	$resolution_mandatory=$row['res_mandatory'];
	
	$user_id=$_SESSION['user_id'];
	$qry="select * from task where assign_id=$user_id and status_id <> $resolution_mandatory";
	$my_task_list = mysql_query($qry);
	$my_task_list_rows = mysql_num_rows($my_task_list);
	*/
?>