
<?php 

/* 

1. Create php file.
	- Initialize variables X
2. Create form X
3. Include width input (type=number) X
4. Include length input (type=number) X
5. Submit form 
6. If width & length are included, then
7. Calculate sq feet (width * length)
8. Display total output 
9. 

*/
	$factor = 0.09290304;
	$width = 2;
	$length = 4;
	$totalFeet = ""; 
	$totalMeter = "";


	if ( isset($_POST["submitted"]) ) {
		// if the width is entered 
		if ( isset($_POST["width"]) ) {
			// set width variable
			$width = $_POST["width"];
		} 

		if ( isset($_POST["length"]) ) {
			// set length variable
			$length = $_POST["length"];
		}
		// if not set // display error message
	}

	$totalFeet = $width * $length;
	$totalMeter = ($totalFeet * $totalFeet) * $factor;
	$totalMeter = sqrt($totalMeter);
?>

<form method="POST">
	
	<h2>Calculate area of room</h2>

	<label>width (in ft)</label>
	<input type="number" name="width" value="<?=$width?>" min="0">

	<br> <br>

	<label>length (in ft)</label>
	<input type="number" name="length" value="<?=$length?>" min="0">

	<br>

	<button type="submit" name="submitted">Total</button>

</form>

<output><?=$totalFeet?>ft</output>

<br>

<output><?=$totalMeter?>sq meters</output>