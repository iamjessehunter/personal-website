
<hello>
	<inner-column>
		<header>
			<a class="mild-voice" href="?page=home">Saying Hello</a>
		</header>
	<inner-column>
</hello>

<?php 

/* Pseudocode

	1. Initialize variables
	2. Create form
	3. Prompt for what is your name?
	4. Include name in prompt
	5. Output = Hello "$name"
*/

	$name = "";
	$greeting = "Hello ";

	if ( isset($_POST["submit"]) ) {

		if ( isset($_POST["name"]) ) {

			$name = $_POST["name"];
		}
	}


?>

<form method="POST">
	
	<label class="low-voice">What is your name?</label>
	<input type="text" name="question">

	<button type="submit" name="submit">Enter</button>

</form>

<br> <br>

<output class="low-voice">Hello! <?=$name?></output>