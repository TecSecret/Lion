<?php
	
	
		session_start();
		//include("lionP.php");
		unset($_SESSION['email']);
		unset($s_SESSION['password']);
		session_destroy();
		
		header("Location:index.html");
	

?>