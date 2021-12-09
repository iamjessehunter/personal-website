
<?php
	// you could simplify the $variables up here if you want....
	// example
	$thumbnail = $article["thumbnail"];
	// it may or may not - be more readable
?>


<article-card>

	<h2 class='intro-voice' href="#"><?=$article["heading"]?></h2>

	<p class='low-voice'><?=$article["description"]?></p>

	<div class="links">
		<a class="visit calm-voice" href="#"><?=$article["site"]?></a>

		<a class="read calm-voice" href="#"><?=$article["case"]?></a>
	</div>
	
</article-card>
