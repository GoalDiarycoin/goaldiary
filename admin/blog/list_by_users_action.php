<?php
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$assigned_mandatory=$row['assigned_mandatory'];
	$resolution_mandatory=$row['res_mandatory'];
	
	/*$qry="select 
		id
		,name
		,(select count(*) from task where assign_id=user.id and status_id=$assigned_mandatory) as task_count
	from user order by name asc";*/
	$qry="select 
		id
		,name
		,(select count(*) from task where assign_id=user.id and status_id <> $resolution_mandatory) as task_count
	from user order by name asc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);
	
	function task_list($id)
	{
		$qry="select * from settings where id=1";
		$list = mysql_query($qry);
		$row=mysql_fetch_array($list);
		
		$assigned_mandatory=$row['assigned_mandatory'];
		$resolution_mandatory=$row['res_mandatory'];
		
		//$qry="select * from task where assign_id=$id and status_id=$assigned_mandatory order by timestamp desc";
		$qry="select * from task where assign_id=$id and status_id <> $resolution_mandatory order by timestamp desc";
		$task_list = mysql_query($qry);
		
		return $task_list;
	}
?>