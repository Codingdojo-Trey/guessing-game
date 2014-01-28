<?php 
	session_start();
	if(isset($_POST['action']) AND $_POST['action'] == 'guess')
	{
		$_SESSION['errors'] = array();

		if($_POST['question1'] != 'pizza')
		{
			$_SESSION['errors'][] = 'you got question 1 wrong!';
		}

		if($_POST['question2'] != 'Maine')
		{
			$_SESSION['errors'][] = 'you got question 2 wrong!';
		}

		if (count($_SESSION['errors']) > 0)   //why do you think this works?  
		{
			header('location: index.php');
			exit();
		}
		else  //what does this signify?
		{
			$_SESSION['success'] = TRUE;
			header('location: success.php');
			exit();
		}
	}
?>