
<quotes>
	<inner-column>
		<header>
			<a class="mild-voice" href="?page=home">Printing Quotes</a>
		</header>
	<inner-column>
</quotes>

<?php 

/* Constraints

	- Use a single output statement to produce this output,
	using appropriate string-escaping techniques for quotes.
*/

/* Pseudocode
	
	1. Initialize Quote
	2. Initialize Author
	3. Initialize question on what the quote is
	4. Initialize question on who said the quote
	5. Initialize line break (string escaping technique) XXXXX todo
	6. Prompt for question = $quote
	7. Prompt for question = $author
	8. Prompt for message = $author said $quote
	9. Display questions and message in a single output
*/

	$quote = "Why is it that people who can't take advice always insist on giving it?";
	$author = "James Bond";

	$firstQuestion = "What is the quote?";
	$secondQuestion = "Who said it?";

	$message = $author." said, ".$quote;


	echo $firstQuestion." <br> <br> ".$quote." <hr> ".$secondQuestion." <br> <br> ".$author." <hr> ".$message;

?>