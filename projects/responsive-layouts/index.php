

<?php include('header.php'); ?>

<!-- MODULES -->

<?php include("modules/bbcnews.php"); ?>

<?php include("modules/starbucks.php"); ?>

<?php include("modules/solidworks.php"); ?>

<?php include("modules/grandcentral.php"); ?>

<?php include("modules/proofpoint.php"); ?>

<?php include("modules/paperpillar.php"); ?>
			
			<script type="text/javascript">	
				var body = document.querySelector('body');
				// set up a "listener" that will 
				// listen for "clicks" (and taps) on the whole page!
				document.addEventListener('click', function(event) {

				  console.log(event.target);

				  if ( event.target.matches('.toggle') ) {
				    body.classList.toggle('small-menu-open');
				  }

				  if ( event.target.matches('a') ) {
				    alert(`I'm a link for ${event.target.textContent}`);
				  }
				});
				// the 'event' is the "click" - 
				// and really... you can call that argument whatever you want. The first argument represents the event - no matter what you call it.
			</script>
					
		</main>

		<?php include("footer.php"); ?>

	</body>
</html>