<?php	
	$err="";
	
	$role='';
	$name='';
	$mailid='';
	$phno='';
	$username='';
	$password='';
	
	if (isset($_POST['btn_add']))
	{	
		$role=trim($_POST['role']);		
		$name=trim($_POST['name']);		
		$mailid=trim($_POST['mailid']);		
		$phno=trim($_POST['phno']);	
		$username=trim($_POST['username']);
		$password=trim($_POST['password']);
		
		if($role!='' && $name!='' && $mailid!='' && $username!='' && $password!='')
		{
			$customer_details=mysql_query("select * from users where username='$username'");
			$customer_details_cnt=mysql_num_rows($customer_details);
			
			if($customer_details_cnt==0)
			{
				mysql_query("insert into users (role, name, mailid, phno, username, password) values ($role, '$name', '$mailid', '$phno', '$username', '$password')");
				
				echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
			}
			else
			{
				$err="Username already exists !";
			}
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
?>