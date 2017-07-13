<?php
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$assigned_mandatory=$row['assigned_mandatory'];
	$resolution_mandatory=$row['res_mandatory'];

	$id=$_SESSION['user_id'];
	
	$qry="select name from user where id = $id";
	$details = mysql_query($qry);
	$row=mysql_fetch_array($details);
	$name=$row['name'];
	
	$qry="select 
		id
		,task
		,descr
		,(select name from substream where id=task.substream_id) as substream_name
		,(select name from stream where id=(select stream_id from substream where id=task.substream_id)) as stream_name
		,(select name from user where id=task.user_id) as created
		,(select name from user where id=task.assign_id) as assigned_to
		,assign_id
		,(select name from user where id=task.mod_id) as moderator
		,(select name from status where id=task.status_id) as status
		,status_id
		,dat
		,res
		,timestamp
		,comments
		,ongoing
		,verified
	from task where assign_id=$id and status_id <> $resolution_mandatory order by ongoing desc, timestamp desc";
	$list = mysql_query($qry);
	$list_rows = mysql_num_rows($list);


?>