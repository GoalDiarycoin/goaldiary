<?php	
	$qry="select * from settings where id=1";
	$list = mysql_query($qry);
	$row=mysql_fetch_array($list);
	
	$admin_name=$row['admin_name'];
	$admin_mailid=$row['admin_mailid'];
	$admin_phno=$row['admin_phno'];
	$street=$row['street'];
	$city=$row['city'];
	$state=$row['state'];
	$pin=$row['pin'];
	$country=$row['country'];
	$title=$row['title'];
	$meta=$row['meta'];
	$keywords=$row['keywords'];
	$facebook=$row['facebook'];
	$twitter=$row['twitter'];
	$googleplus=$row['googleplus'];
	$maps=$row['maps'];
	$head_css_js=$row['head_css_js'];
	$footer_css_js=$row['footer_css_js'];
	
	$err="";
	
	if (isset($_POST['btn_update']))
	{
		$admin_name=trim($_POST['admin_name']);
		$admin_mailid=trim($_POST['admin_mailid']);
		$admin_phno=trim($_POST['admin_phno']);
		$street=trim($_POST['street']);
		$city=trim($_POST['city']);
		$state=trim($_POST['state']);
		$pin=trim($_POST['pin']);
		$country=trim($_POST['country']);
		$title=trim($_POST['title']);
		$meta=trim($_POST['meta']);
		$keywords=trim($_POST['keywords']);
		$facebook=trim($_POST['facebook']);
		$twitter=trim($_POST['twitter']);
		$googleplus=trim($_POST['googleplus']);
		$maps=mysql_real_escape_string($_POST['maps']);
		$head_css_js=mysql_real_escape_string($_POST['head_css_js']);
		$footer_css_js=mysql_real_escape_string($_POST['footer_css_js']);
		
		if($title!='')
		{
			mysql_query("update settings set admin_name='$admin_name', admin_mailid='$admin_mailid', street='$street', city='$city', state='$state', pin='$pin', country='$country', title='$title', meta='$meta', keywords='$keywords', facebook='$facebook', twitter='$twitter', googleplus='$googleplus', admin_phno='$admin_phno', maps='$maps', head_css_js = '$head_css_js', footer_css_js = '$footer_css_js' where id=1");
		
			echo"<script>alert('Success !!'); window.location ='settings.php'; </script>";
		
		}
		else 
		{
			$err="Enter Required Fields !";
		}
	}
?>