<?php
	session_start();
	if(!$_SESSION['success'])  //this redirects users if they try to just navigate here without answering :D
	{
		header('location: index.php');
		exit();
	}
	else
	{
		echo "you now know everything about Trey!  Isn't he interesting??";
		unset($_SESSION['success']);  //unset this so it doesn't cause mayhem!
	}

?>