<?php	
	$id=$_GET['id'];
	
	$qry="select * from solution where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	$issue=$row['issue'];
	$solution=$row['solution'];
	
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		$issue=trim($_POST['issue']);
		$solution=trim($_POST['solution']);
		
		if($issue!="" && $solution!='')
		{
			mysql_query("update solution set issue='$issue', solution='$solution' where id=$id");
		
			echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
	
?>