<?php
	$global_title="My Profile Edit | $global_title";
	
	$err="";
	
	$id=$_SESSION['user_id'];
	
	$qry="select * from users where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$name=$row['name'];
	$mailid=$row['mailid'];
	$phno=$row['phno'];
	$image=$row['image'];
	$sex=$row['sex'];
	$dob=$row['dob'];
	
	if (isset($_POST['btn_update']))
	{	
		$name=trim($_POST['name']);
		$mailid=trim($_POST['mailid']);
		$phno=trim($_POST['phno']);
		if(isset($_POST['sex']))
		{
			$sex=trim($_POST['sex']);
		}
		$dob=trim($_POST['dob']);
		
		if($name != '' && $mailid != '' && $phno != '' && $sex != '' && $dob != '')
		{
			mysql_query("update users set name = '$name', mailid = '$mailid', phno = '$phno', sex='$sex', dob='$dob' where id=$id");
			
			if($_FILES['image']['name'] != "")
			{
				$extension = end((explode(".", $_FILES["image"]["name"])));
				
				if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension == 'PNG' || $extension=='gif')
				{
					$UPLOAD_DIR="images/profiles/";
					
					move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
					
					$image="$id.$extension";
					
					mysql_query("update users set image = '$image' where id=$id");
				}
				else
				{
					$err="Image extension should be jpg/jpeg/JPG/JPEG/png/GIF !";
				}
			}
		}
		else 
		{
			$err="Enter Required Fields !";
		}
		
		if($err=="")
		{
			echo"<script>window.location ='profile.php?success=1'; </script>";
		}
	}
?>