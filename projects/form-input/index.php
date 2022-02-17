
<?php include "head.php"; ?>


<?php 

	$enteredUsername = "";
	$enteredPassword = "";

	// if form is submitted
	if ( isset($_POST["go"]) ) {
		if (isset($_POST["username"]) ) {
			$enteredUsername = $_POST["username"];
		}
		if (isset($_POST["password"]) ) {
			$enteredPassword = $_POST["password"];
		}

		// display message
		if ($enteredUsername && $enteredPassword) {
			echo "Logged in";
		} else {
			echo "Error";
		}
	}

?>


	<form method="POST">

		<div class="field">
			<label for="">Username: </label>
			<input type="text" name="username" value="<?= $enteredUsername ?>">
		</div>

		<div class="field">
			<label for="">Password: </label>
			<input type="password" name="password" value="<?= $enteredPassword ?>">
		</div>

		<button type="submit" name="go">Sign in</button>
		
	</form>

</body>
</html>