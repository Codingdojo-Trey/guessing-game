<?php
	session_start(); 
?>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	*
	{
		font-family: sans-serif;
	}
	.error
	{
		color: red;
	}
</style>
<body>
	<div>
		<?php
			if(isset($_SESSION['errors']))
			{
				foreach ($_SESSION['errors'] as $error)
				{
					echo "<p class='error'>{$error}</p>";
				}
				unset($_SESSION['errors']);
			}
		?>
	</div>
	<div>
		<form action='process.php' method='post'>
		<p>What is my favorite food? (1 word)</p>
		<input type='text' name='question1'>
		<p>Which one of these states have I NOT lived in?</p>
		<select name='question2'>
			<option>Colorado</option>
			<option>Washington</option>
			<option>Texas</option>
			<option>California</option>
			<option>Michigan</option>
			<option>Maine</option>
		</select>
		<input type='submit' value='guess'>
		<input type='hidden' name='action' value='guess'>
	</form>
	</div>
</body>
</html>