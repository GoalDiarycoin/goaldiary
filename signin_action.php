<?php
	$global_title="Sign In | $global_title";
	
	if(isset($_SESSION['user_id']))
	{
		echo "<script>window.location ='index.php';</script>";
	}
	
	$error="";
	$username='';
	$password='';

	if (isset($_POST['btn_login']))
	{		
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$qry="SELECT * FROM users where username='$username' and password='$password' and status='Active'";
		$user_details = mysql_query($qry);
		$user_list_num = mysql_num_rows($user_details);
		
		if($user_list_num==1)
		{
            $row = mysql_fetch_array($user_details); 
			
			$_SESSION['user_id'] =$row['id'];
			$_SESSION['user_name']=$username;
			$_SESSION['full_name']=$row['name'];
			$_SESSION['role']=$row['role'];
			
			$time = time();
			$date = new DateTime("@$time");
			$date=$date->format('Y-m-d H:i:s');
			
			mysql_query("update users set last_login='$date' where username='$username' and password='$password'");
			
			echo "<script>window.location ='index.php';</script>";
			
		}
		else
		{
			$error="Invalid Login !!!";
		}
	}
?>