
<lib>
	<inner-column>
		<header>
			<a class="mild-voice" href="?page=home">Mad Lib</a>
		</header>
	<inner-column>
</lib>

<?php

/* Constraints

	- Use a single output statement for this program
*/

/* Pseudocode 

	1. Initialize noun
	2. Initialize verb
	3. Initialize adjective
	4. Initialize adverb
	5. Prompt mad lib with including noun, verb, adjective, and adverb
	6. Display mad lib message 
*/

	$noun = "bike";
	$verb = "ride";
	$adjective = "grey";
	$adverb = "rapidly";

	$message = "Besides coding, my other passion is riding bicycles. I have a ".$adjective." ".$noun." from Trek. It is a Series One road ". $noun. ". Typically I like to ".$verb." ".$adjective." up hills either in the city or country.";

	echo $message;

?>