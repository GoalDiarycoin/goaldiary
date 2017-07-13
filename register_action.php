<?php	
	$global_title="Register | $global_title";
	
	$err="";
	
	$role='';
	$name='';
	$mailid='';
	$phno='';
	$username='';
	$password='';
	
	if (isset($_POST['btn_register']))
	{	
		$role=2;
		$name=trim($_POST['name']);
		$mailid=trim($_POST['mailid']);
		$phno=trim($_POST['phno']);
		$username=trim($_POST['username']);
		$password=trim($_POST['password']);
		$password1=trim($_POST['password1']);
		
		if($role != '' && $name != '' && $mailid != '' && $username != '' && $password != '' && $password1 != '')
		{
			if($password == $password1)
			{
				$customer_details=mysql_query("select * from users where username='$username'");
				$username_details_cnt=mysql_num_rows($customer_details);
				
				$customer_details=mysql_query("select * from users where mailid='$mailid'");
				$mailid_details_cnt=mysql_num_rows($customer_details);
				
				$customer_details=mysql_query("select * from users where phno='$phno'");
				$phno_details_cnt=mysql_num_rows($customer_details);
				
				if($username_details_cnt!=0)
				{
					$err="Username already exists !";
				}
				if($mailid_details_cnt!=0)
				{
					$err.="<br/>MailID already exists !";
				}
				if($phno_details_cnt!=0)
				{
					$err.="<br/>Contact Number already exists !";
				}
				
				if($err=="")
				{
					mysql_query("insert into users (role, name, mailid, phno, username, password) values ($role, '$name', '$mailid', '$phno', '$username', '$password')");
					
					$qry="select * from settings where id=1";
					$list = mysql_query($qry);
					$row=mysql_fetch_array($list);
					
					$admin_mailid=$row['admin_mailid'];
					
					$to      = $admin_mailid;
					$subject = 'New Registration';
					$message = "Name: $name <br/> Email: $mailid <br/> Phone Numner : $phno <br/> Username : $username";
					$headers = "From: $admin_mailid";

					mail($to, $subject, $message, $headers);
					
					echo"<script>alert('Success !!'); window.location ='signin.php'; </script>";
				}
			}
			else
			{
				$err="Password doesnt match !";
			}
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
?>