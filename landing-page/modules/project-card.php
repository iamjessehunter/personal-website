

<?php

$project1 = [
	"title" => "Spill the Coffee",
	"description" => "When the cup overflows",
];

$project2 = [
	"title" => "THE Responsive Layout",
	"description" => "Layout on Layout on Layout on Layout",
];

$project3 = [
	"title" => "Dog Adoption",
	"description" => "See how these fluffy fellas got adopted",
];

$project4 = [
	"title" => "East Village Cycles",
	"description" => "Shop for your next adventure",
];

$projects = [$project1, $project2, $project3, $project4];

?>

<section class="project-card">
	<inner-column>
		
	  <header>
   		<h1 class="strong-voice">Projects</h1>
  	  </header>

		<ol class="project-list">

		<?php foreach ($projects as $project) { ?>
		
			<li class="project-info">
				<picture class="preview-img">
					<img src="landing-page/images/coffee.jpg">
				</picture>
				<h2 class="mid-voice"><?=$project[title]?></h2>
				<p class="low-voice"><?=$project[description]?></p>
			</li>
			
			<?php } ?>

		</ol>
	</inner-column>
</section>