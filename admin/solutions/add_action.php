<?php	
	$err="";
	
	$issue='';
	$solution='';
	
	if (isset($_POST['btn_add']))
	{
		$issue=trim($_POST['issue']);
		$solution=trim($_POST['solution']);
		$user_id=$_SESSION['user_id'];
		
		if($issue!='' && $solution!='')
		{
			mysql_query("insert into solution (issue, solution, user_id) values ('$issue', '$solution', $user_id)");
			
			$qry="select mailid from user where id=$user_id";
			$list = mysql_query($qry);
			$row=mysql_fetch_array($list);
			$from =$row['mailid'];
			
			$subject="SingTel/Optus Task Tracker | $issue | New Doc Created !";
			
			$message = "<html><body style='font-family:verdana;background-color:#A98;padding:0px;'>";
			$message .= "
				<table border='0' cellspacing='0' cellpadding='6' width='100%' frame=border style='font-family:verdana'>
					<tr>
						<th>
							<h1 style='text-align:center;color:green;padding:0px;margin:0px;'>SingTel/Optus Task Tracker - New Doc Created</h1>
						</th>
					</tr>
					<tr>
						<th>
							<h2 style='text-align:center;color:red;padding:0px;margin:0px;'>Title : $issue</h2>
						</th>
					</tr>
					<tr style='text-align:center'>
						<td>
							<a href='http://shinej02'>VIEW</a>
						</td>
					</tr>
					<tr>
						<td>
							<hr style='background-color:black;border:1px solid;'/>
						</td>
					</tr>
					<tr>
						<td>
							<b><u>Solution</u></b>
						</td>
					</tr>
					<tr>
						<td align=left>
							$solution
						</td>
					</tr>
				</table>
			";
			
			$message .= "</body></html>";
				
			$headers = "From: <$from>\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			$to='SingtelOptusBCCSDDVCIInfra@int.amdocs.com';
			
			//$to='shinej@amdocs.com, meghnab@amdocs.com';
			
			mail($to, $subject, $message, $headers);
			
		
			echo "<script>alert('Success !!'); window.location ='list.php'; </script>";
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
?>