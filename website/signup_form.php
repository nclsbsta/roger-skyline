<!DOCTYPE html>
<html>
	<head>
		<title>signup_form</title>
		<meta charset="utf-8">
	</head>
	<div align="center">
		<h2>INSCRIPTION</h2>
		<br /><br />
		<form method="post" action="signup.php">
			<label for="email">Pseudo :</label>
			<input type="text" name="email" placeholder="Enter your email" autocomplete="off"/>
			<br/>
			<label for="passw">Password :</label>
			<input type="passw" name="passw" placeholder="Choose a password" autocomplete="off"/>
			<br/><br/>
			<input type="submit" name="signupform" value="SUBMIT">
		</form>
		<?php
			if (isset($_GET['error']))
			{
				echo '<br/>' . $_GET['error'];
				$_GET['error'] = NULL;
			}
		?>
	</div>
</html>
