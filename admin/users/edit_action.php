<?php	
	$err="";
	
	$id=$_GET['id'];
	
	$qry="select * from users where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$role=$row['role'];
	$name=$row['name'];
	$mailid=$row['mailid'];
	$phno=$row['phno'];
	$username=$row['username'];
	$username1=$row['username'];
	$password=$row['password'];
	
	if (isset($_POST['btn_update']))
	{	
		$role=trim($_POST['role']);	
		$name=trim($_POST['name']);		
		$mailid=trim($_POST['mailid']);		
		$phno=trim($_POST['phno']);	
		$username=trim($_POST['username']);
		$password=trim($_POST['password']);
		
		if($role!='' && $name!='' && $mailid!='' && $username!='' && $password!='')
		{
			if($username1 != $username)
			{
				$user_details=mysql_query("select * from users where username='$username'");
				$user_details_cnt=mysql_num_rows($user_details);
				
				if($user_details_cnt==0)
				{
					mysql_query("update users set role=$role, name='$name', mailid='$mailid', phno='$phno', username='$username', password= '$password' where id=$id");
					
					echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
				}
				else
				{
					$err="Username already exists !";
				}
			}
			else
			{
				mysql_query("update users set role=$role, name='$name', mailid='$mailid', phno='$phno', username='$username', password= '$password' where id=$id");
					
				echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
			}
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
?>