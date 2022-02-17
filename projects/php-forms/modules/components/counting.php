
<counting>
	<inner-column>
		<header>
			<a class="mild-voice" href="?page=home">Counting the Number of Characters</a>
		</header>
	<inner-column>
</counting>

<?php 

/* Constraints

	- Be sure the output contains the original string
	- Use a single output statement to construct the output
	- Use a built-in function of the programming language to determinge the length of the string
*/

/* Pseudocode
	
	1. Initialize string
	2. Prompt for string length = "String has X characters"
	3. Display string and the number of characters
*/

	$myString = "Aston Martin DB5";

	$theLength = strlen($myString);

	echo "$myString has" . " $theLength " . " characters.";

?>