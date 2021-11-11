

<section class="layout">
	<inner-column>
		
	<section class="layout-info">
		<h3 class="mild-voice">
			Section Layout:
			<a href="https://solidworks.com/" target="_blank">Solidworks</a>
		</h3>
	</section>

	<section class="solidworks">
		<inner-column>

			<!-- normal ol' website -->
<header-solidworks class="site-header">
	<nav class='logo-menu'>
		<a href="#" class="slow-voice">
		<span>SOLID</span>WORKS
		</a>

		<button class='toggle slow-voice'>
		Try now <!-- these can also be only inserted based on the scenario AFTER the page loads -->
		</button>
	</nav>

	<nav class='site-menu'>
		<a href="#" class="link-voice">Products</a>
		<a href="#" class="link-voice">Solutions</a>
		<a href="#" class="link-voice">Community</a>
		<a href="#" class="link-voice">Success</a>
		<a href="#" class="link-voice">Support</a>
		<a href="#" class="link-voice">Buy</a>

    <button class='toggle corner'>
		  CLOSE <!-- these can also be only inserted based on the scenario AFTER the page loads -->
		</button>
    
	</nav>
</header-solidworks>

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
			
			<grid-wrapper>
				<div class="mod mod-1">
					<div class="mod-1-text">
						<h3 class="slow-voice">Imagine All We Can Do Together</h3>
						<a href="#" class="link-voice">> Register Today</a>
					</div>
				</div>

				<div class="mod mod-2">
					<div class="mod-2-text">
						<h3 class="slow-voice">Manage Your Data Your Way</h3>
						<a href="#" class="link-voice">> Learn More</a>
					</div>
				</div>

				<div class="mod mod-3">
					<div class="mod-3-text">
						<h3 class="slow-voice">What's New in SOLIDWORKS 2022</h3>
						<p class="link-voice">New Enchancements to streamline and accelerate your entire product development process which will improve efficiency, accuracy, and collaboration.</p>
						<a href="#" class="link-voice">Learn More</a>
					</div>
				</div>

				<div class="mod mod-4">
					<div class="mod-4-text">
						<h3 class="slow-voice">Explore Industry-Leading Cloud-Enabled Simulation Tools</h3>
						<a href="#" class="link-voice">> Learn More</a>
					</div>
				</div>

				<div class="mod mod-5">
					<div class="mod-5-text">
						<h3 class="slow-voice">Unify All Product Development</h3>
						<a href="#" class="link-voice">> Learn More</a>
					</div>
				</div>

				<div class="mod mod-6">
					<div class="mod-6-text">
						<h3 class="slow-voice">DELMIAWorks Manufacturing ERP</h3>
						<p class="link-voice">An end-to-end manufacturing ERP System with a “shop floor first” focus that enables mid-market manufacturers to streamline processes across their supply chain and achieve operational excellence.</p>
						<a href="#" class="link-voice">> Learn More</a>
					</div>
				</div>

				<div class="mod mod-7">
					<div class="mod-7-text">
						<h3 class="slow-voice">SOLIDWORKS Live</h3>
						<a href="#" class="link-voice">> Browse now</a>
					</div>
				</div>

				<div class="mod mod-8">
					<div class="mod-8-text">
						<h3 class="slow-voice">Customer Stories</h3>
						<a href="#" class="link-voice">> Explore Now</a>
					</div>
				</div>

				<div class="mod mod-9">
					<div class="mod-9-text">
						<h3 class="slow-voice">3DEXPERIENCE SOLIDWORKS® for Makers</h3>
						<p class="link-voice">Start making with the world’s best design tools – now for hobbyists and personal projects.</p>
						<a href="#" class="link-voice">> Learn More</a>
					</div>
				</div>

			</grid-wrapper>
	</section>
	</inner-column>
</section>
