<?php
	
session_start();
	
if(!isset($_SESSION['user_id']) || $_SESSION['role'] != '1')
{
	header("Location:https://goaldiary.co.in/admin/login/login.php");
		
}

?>