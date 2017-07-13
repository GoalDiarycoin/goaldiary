<?php	
	$err="";
	
	$news="";
	$subject="";
	
	if (isset($_POST['btn_add']))
	{
		$news=trim($_POST['news']);
		$subject=trim($_POST['subject']);
		
		if($news != "" && $subject != "")
		{
			$qry="select * from settings where id=1";
			$list = mysql_query($qry);
			$row=mysql_fetch_array($list);
			$from=$row['admin_mailid'];
			
			$list=mysql_query("select * from subscriber");
			while($row=mysql_fetch_array($list))
			{
				$to=$row['mailid'];
				
				$headers = "From: <$from>\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

				mail($to, $subject, $news, $headers);
			}
			
			echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
	
?>