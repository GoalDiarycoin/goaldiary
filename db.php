<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php
	
	$site_root="https://goaldiary.co.in";	
	$db_user_name="user_goaldiary";
	$db_password="Unix_11";
	$db_name="goaldiary";
		
	$link = mysql_connect("localhost","$db_user_name","$db_password") or die("cannot connect");
		
	mysql_select_db("$db_name", $link) or die("cannot select DB");



?>