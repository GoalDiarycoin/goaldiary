<?php
	include '../db.php';
	
	$id=$_POST['id'];
	/*
	$customer_list=mysql_query("select * from customer where cat_id=$id");
	$customer_list_count=mysql_num_rows($customer_list);
	
	$subject_list=mysql_query("select * from subject where cat_id=$id");
	$subject_list_count=mysql_num_rows($subject_list);
	*/
	
	//if($customer_list_count==0 && $subject_list_count==0)
	//{
		mysql_query("delete from slideshow where id=$id");
	//}	
	//else
	//{
		//echo "error";
	//}
?>