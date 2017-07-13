<?php	
	$id=$_SESSION['user_id'];
	
	$qry="select * from users where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$username=$row['username'];
	$password=$row['password'];
	$password2=$row['password'];
	$mailid=$row['mailid'];
	$phno=$row['phno'];
	
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		$username=trim($_POST['username']);
		$password=trim($_POST['password']);
		$password2=trim($_POST['password2']);
		$mailid=trim($_POST['mailid']);
		$phno=trim($_POST['phno']);
		
		if($username!="" && $password!='' && $password2!='' && $mailid!='' && $phno!='' && $password==$password2)
		{
			mysql_query("update users set username='$username', password='$password', mailid='$mailid', phno='$phno' where id=$id");
			
			
		
			echo"<script>alert('Success !!'); window.location ='../login/logout.php'; </script>";
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
	
?>