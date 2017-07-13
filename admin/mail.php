<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	
	$site_root="http://10.75.112.45/projects/task_track";	
	$db_user_name="root";
	$db_password="";
	$db_name="tasktracker";
		
	$link = mysql_connect("localhost","$db_user_name","$db_password") or die("cannot connect");
		
	mysql_select_db("$db_name", $link) or die("cannot select DB");

	$qry="select 
		name
		,id
		,(select count(*) from task where status_id=status.id) as cnt
	from status order by name asc";
	$status_list_global=mysql_query($qry);

	$subject="SingTel/Optus Task Tracker - Daily Report !";	
	
	$str='';
	while($row = mysql_fetch_array($status_list_global)) 
	{
		$name=$row['name'];
		$cnt=$row['cnt'];
		
		$str.=
		"
		<tr>
			<td align=right width='50%' >
				$name Tasks
			</td>
			<td width='1%'>
				:
			</td>
			<td align=left>
				$cnt
			</td>
		</tr>
		";
	}
	$str.="<tr>
			<td colspan=3>
				<hr style='background-color:black;border:1px solid;'/>
			</td>
		</tr>";
	$str.="<tr>
			<td colspan=3>
				<h3 style='text-align:center;color:green;padding:0px;margin:0px;'><u>Assigned Tasks !</u></h3>
			</td>
		</tr>
		<tr>
			<td colspan=3>
				<table align='center' border=0 width='100%' cellpadding=6 cellspacing=0 style='font-family:verdana'>
		";
		
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$assigned_mandatory=$row['assigned_mandatory'];
	
	$qry="select 
		id
		,name
		,(select count(*) from task where assign_id=user.id and status_id=$assigned_mandatory) as task_count
	from user order by name asc";
	$user_list = mysql_query($qry);
	
	while($row = mysql_fetch_array($user_list)) 
	{
		$name=$row['name'];
		$cnt=$row['task_count'];
		
		$task_list=task_list($row['id'], 1);
		
		$str2='';
		$k=1;
		while($row2 = mysql_fetch_array($task_list)) 
		{
			$task=$row2['task'];
			$str2.="$k. ";
			$str2.=$task;
			
			$str2.='<hr style="border:1px solid;border-color:gray"/>';
			$k++;
		}
			
		$str.=
		"
		<tr>
			<td align=right width='20%' style='border-bottom:1px solid'>
				$name ($cnt)
			</td>
			<td width='1%' style='border-bottom:1px solid'>
				:
			</td>
			<td align=left style='border-bottom:1px solid'>
				$str2
			</td>
		</tr>
		";
	}
	
	$str.='</table></td>
		</tr>';
	
	$str.="<tr>
			<td colspan=3>
				<hr style='background-color:black;border:1px solid;'/>
			</td>
		</tr>";
	$str.="<tr>
			<td colspan=3>
				<h3 style='text-align:center;color:green;padding:0px;margin:0px;'><u>Closed Tasks !</u></h3>
			</td>
		</tr>
		<tr>
			<td colspan=3>
				<table align='center' border=0 width='100%' cellpadding=6 cellspacing=0 style='font-family:verdana'>
		";
	
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$res_mandatory=$row['res_mandatory'];
	
	$qry="select 
		id
		,name
		,(select count(*) from task where assign_id=user.id and status_id=$res_mandatory) as task_count
	from user order by name asc";
	$user_list = mysql_query($qry);
	
	while($row = mysql_fetch_array($user_list)) 
	{
		$name=$row['name'];
		$cnt=$row['task_count'];
		
		$task_list=task_list($row['id'], 2);
		
		$str2='';
		$k=1;
		while($row2 = mysql_fetch_array($task_list)) 
		{
			$task=$row2['task'];
			$str2.="$k. ";
			$str2.=$task;
			
			$str2.='<hr style="border:1px solid;border-color:gray"/>';
			$k++;
		}
			
		$str.=
		"
		<tr>
			<td align=right width='20%' style='border-bottom:1px solid'>
				$name ($cnt)
			</td>
			<td width='1%' style='border-bottom:1px solid'>
				:
			</td>
			<td align=left style='border-bottom:1px solid'>
				$str2
			</td>
		</tr>
		";
	}
	
	$str.='</table></td>
		</tr>';
		
	$message = "<html><body style='font-family:verdana;background-color:#A98;padding:0px;'>";
	$message .= "
		<table border='0' cellspacing='0' cellpadding='6' width='100%' frame=border style='font-family:verdana'>
			<tr>
				<th colspan=3>
					<h1 style='text-align:center;color:red;padding:0px;margin:0px;'>SingTel/Optus Task Tracker - Daily Report !</h1>
				</th>
			</tr>
			<tr>
				<td colspan=3>
					<hr style='background-color:black;border:1px solid;'/>
				</td>
			</tr>
			$str
		</table>
	";
	$message .= "</body></html>";
	//echo $message;
	$headers = "From: <_Singtel Optus Task Tracker <someshwn@amdocs.com>\r\n";
	//$headers .= "CC: someshwn@amdocs.com, Mayank.Goswami1@amdocs.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	//$to='SingtelOptusBCCSDDVCIInfra@int.amdocs.com';
	$to='shine.john@amdocs.com';
	
	mail($to, $subject, $message, $headers);
	
	function task_list($id, $mand)
	{
		$qry="select * from settings where id=1";
		$list = mysql_query($qry);
		$row=mysql_fetch_array($list);
		
		if($mand==1)
		$mandatory=$row['assigned_mandatory'];
		else if($mand==2)
		$mandatory=$row['res_mandatory'];
		
		$qry="select * from task where assign_id=$id and status_id=$mandatory order by timestamp desc";
		$task_list = mysql_query($qry);
		
		return $task_list;
	}
?>