<?php
	if (isset($_SERVER['HTTP_USER_AGENT'])) 
	{
		$agent = $_SERVER['HTTP_USER_AGENT'];
	}
	if (strlen(strstr($agent, 'MSIE')) > 0) 
	{
		//echo "For better usage of the software please use chrome/firefox !";
		//die();
	}
?>

<?php
	error_reporting(E_ALL ^ E_DEPRECATED);

$site_root="https://goaldiary.co.in/admin";	
$db_user_name="user_goaldiary";
$db_password="Unix_11";
$db_name="goaldiary";
		
	$link = mysql_connect("localhost","$db_user_name","$db_password") or die("cannot connect");
		
	mysql_select_db("$db_name", $link) or die("cannot select DB");
?>
