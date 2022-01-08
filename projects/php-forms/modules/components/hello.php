
<hello>
	<inner-column>
		<header>
			<a class="mild-voice" href="?page=home">Saying Hello</a>
		</header>
	<inner-column>
</hello>

<?php 

/* Constraint

	- Keep the input, string concatenation, and output separate.
*/

/* Pseudocode

	1. Initialize variables
	3. Include first name ("Jesse")
	4. Include last name ("Hunter")
	5. Display question
	6. Display first and last name
*/

	$question = "What is your name?";
	$first = "Jesse";
	$last = "Hunter";

	$message = $last."...".$first." ".$last;

	echo "What is your name?";

	echo "<br>" . "<br>";

	echo "My name is" . " $message.";

	echo "<br>" . "<br>";

	/* Writing without any variables */
	echo "Hello! My name is Jesse Hunter and there are no variables to be seen here!";

?>

