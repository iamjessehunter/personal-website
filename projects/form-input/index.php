
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign-In Form</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>


<?php 
	
	$denied = "";
	$confirmed = "";
	
	if ( isset($_POST["go"]) ) {
		$workingUsername = $_POST["username"];
		$workingPassword = $_POST["password"];

		if ( empty($_POST["workingUsername"]) ) {
			$denied = "Error: Username was not entered";
		}

		if ( empty($_POST["workingPassword"]) ) {
			$denied = "Error: Password was not entered";
		}

		if ( empty($workingUsername) && empty($workingPassword) ) {
			$denied = "Error: Username and Password were both not entered";
		}
	}

	function userSignin() {

	}

	// include("user-data.php");

?>


	<form method="POST">
		
		<h1 class="title">Account Form</h1>

		<div class="field">
			<label for="">Username: </label>
			<input type="text" name="username">
		</div>

		<div class="field">
			<label for="">Password: </label>
			<input type="password" name="password">
		</div>

		<button type="submit" name="go">Sign in</button>
		
	</form>

</body>
</html>