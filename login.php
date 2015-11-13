<?php

session_start();

require 'classes/membership.php';


$membership = new Membership();

if($_POST && !empty($_POST['username']) && !empty($_POST['pwd']))
{
	$response = $membership->validate_user($_POST['username'], $_POST['pwd']);

}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Login to TMN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="login">
	<form method="post" action="">
		<h2>Login to TMN<small>Please enter your credentials</small></h2>
		<p>
			<label for="name">Username:</label>
			<input type="text" name="username"/>
		</p>
		<p>
			<label for="pwd">Password:</label>
			<input type="password" name="pwd"/>
		</p>
		<p>
			<input type="submit" id="submit" value="Login" name="submit"/>
		</p>
	</form>
	<?php
		if (isset($response)) {
			echo "<h4>".$response."</h4>";
		}
	?>
</div><!--end of login-->
</body>
</html>