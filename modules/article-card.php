
<article-card>

	<a href="<?=$article["link"]?>" target="_blank">
		<picture>
			<img src="<?=$article["image"]?>">
		</picture>
	</a>

	<text-content>
		<a class='topic mild-voice' 
			href="<?=$article["link"]?>" 
			target="_blank"><?=$article["heading"]?>
		</a>

		<p class='calm-voice'><?=$article["description"]?></p>

		<a class="view link-voice" 
			href="<?=$article["link"]?>" 
			target="_blank"><?=$article["site"]?>
		</a>
	</text-content>
	
</article-card>
