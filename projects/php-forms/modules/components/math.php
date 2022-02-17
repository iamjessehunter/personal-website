
<math>
	<inner-column>
		<header>
			<a class="mild-voice" href="?page=home">Simple Math</a>
		</header>
	<inner-column>
</math>

<?php 

/* Constraints

	- Values coming from users will be strings. Ensure that
	you convert these values to numbers before doing the
	math
	- Keep the inputs and outputs separate from the numerical
	conversions and other processing
	- Generate a single output statement with line breaks in
	the appropriate spots
*/

/* Pseudocode

	1. Initialize first number
	2. Initialize second number
	3. Prompt addition = first number + second number
	4. Prompt subtraction = first number - second number
	5. Prompt multiplication = first number * second number
	6. Prompt division = first number / second number
	7. Display addition total
	8. Display subtraction total
	9. Display multiplication total
	10. Display division total
*/

	$firstNumber = 56;
	$secondNumber = 10;

	$add = $firstNumber + $secondNumber;
	$subtract = $firstNumber - $secondNumber;
	$multiply = $firstNumber * $secondNumber;
	$divide = $firstNumber / $secondNumber;

	echo "Below are simple math equations: <hr> $firstNumber + $secondNumber = $add <br> <br> $firstNumber - $secondNumber = $subtract <br> <br> $firstNumber * $secondNumber = $multiply <br> <br> $firstNumber / $secondNumber = $divide";

?>