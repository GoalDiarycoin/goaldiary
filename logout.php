<?php
	session_start();
	if(isset($_SESSION['user_id']))
	{
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		unset($_SESSION['full_name']);
		unset($_SESSION['role']);
	}
	
	header("Location:signin.php");
?>
