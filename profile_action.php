<?php	
	$global_title="My Profile | $global_title";
	
	$id=$_SESSION['user_id'];
	
	$qry="select * from users where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$name=$row['name'];
	$mailid=$row['mailid'];
	$phno=$row['phno'];
	$username=$row['username'];
	$sex=$row['sex'];
	$image=$row['image'];
	
	
?>