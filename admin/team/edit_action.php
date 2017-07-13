<?php	
	$id=$_GET['id'];
	
	$qry="select * from team where id=$id";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$name=$row['name'];
	$designation=$row['designation'];
	$fb=$row['fb'];
	$twitter=$row['twitter'];
	$gplus=$row['gplus'];
	$linkedin=$row['linkedin'];
	
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		$name=trim($_POST['name']);
		$designation=trim($_POST['designation']);
		$fb=trim($_POST['fb']);
		$twitter=trim($_POST['twitter']);
		$gplus=trim($_POST['gplus']);
		$linkedin=trim($_POST['linkedin']);
		
		if ($_FILES['image']['name'] != "" )
		{
			$extension = end((explode(".", $_FILES["image"]["name"])));
			
			if ($extension == 'jpg' || $extension == 'JPG' || $extension=='jpeg' || $extension=='JPEG' || $extension == 'png' || $extension=='gif')
			{	
				if($name != "" && $designation != "")
				{
					mysql_query("update team set name='$name', designation='$designation', fb = '$fb' , twitter = '$twitter', gplus = '$gplus', linkedin = '$linkedin' where id=$id");
					
					if ($_FILES['image']['name'] != "" )
					{
						$UPLOAD_DIR="../../images/team/";
					
						move_uploaded_file($_FILES['image']['tmp_name'], $UPLOAD_DIR.$id.".".$extension);
					}
				
					echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
				
				}
				else 
				{
					$err="Enter Required Fields !";
				}
			}
			else
			{
				$err="Image extension should be jpg/jpeg/JPG/JPEG/png/GIF !";
			}	
		}
		else
		{	
			if($name != "" && $designation != "")
			{
				mysql_query("update team set name='$name', designation='$designation', fb = '$fb' , twitter = '$twitter', gplus = '$gplus', linkedin = '$linkedin' where id=$id");
			
				echo"<script>alert('Success !!'); window.location ='list.php'; </script>";
			
			}
			else 
			{
				$err="Enter Required Fields !";
			}
		}
	}
	
?>