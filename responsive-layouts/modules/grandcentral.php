

<section class="layout">
	<inner-column>
		
	<section class="layout-info">
		<h3 class="mild-voice">
			Section Layout:
			<a href="https://www.grandcentralterminal.com/shop/new-york-transit-museum-gallery-store/" target="_blank">Grand Central</a>
		</h3>
	</section>

	<section class="grandcentral">
		<!-- NAVBAR -->
		<nav class="navbar-ny">
	     <div class="logo-ny loud-voice">NYC</div>

	     <ul class="nav-links">
	       <input type="checkbox" id="checkbox_toggle"/>
	       <label for="checkbox_toggle" 
	       		  class="hamburger">&#9776;</label>

	       <div class="menu">
	         <li><a href="#" class="nav-voice">Home</a></li>
	         <li><a href="#" class="nav-voice">About</a></li>

	         <li class="services"><a href="#" class="nav-voice">Services</a>
	           <ul class="dropdown nav-voice">
	             <li><a href="#">Dropdown 1 </a></li>
	             <li><a href="#">Dropdown 2</a></li>
	             <li><a href="#">Dropdown 2</a></li>
	             <li><a href="#">Dropdown 3</a></li>
	             <li><a href="#">Dropdown 4</a></li>
	           </ul>
	         </li>

	         <li><a href="#" class="nav-voice">Pricing</a></li>
	         <li><a href="#" class="nav-voice">Contact</a></li>
	       </div>
	     </ul>
   	</nav>
   	<!-- TITLE HEAD -->
		<div class="ny-head">
			<h1 class="ny-title strong-voice">NEW YORK CITY MUSEUM</h1>
		</div>

		<div class="break"></div>
		<div class="break"></div>
		<!-- TEXT CONTENT -->
		<div class="ny-main">
			<div class="ny-text">
				<p class="quiet-voice">The <span>navbar</span> was styled using flexbox and hover effects for visual highlighting. For normal display the <span>services</span> link is set to <span>display</span> "none" and then set to <span>display</span> "block" for larger breakpoints. The hamburger menu is a <span>checkbox_toggle</span> label. It is set with CSS for smaller breakpoints whereas on the larger breakpoint flexbox is utilized.</p>

				<p class="quiet-voice">Above is the completed <span>header</span> section. I used a background image and an h1 for the title. Flexbox was utilized to align the h1 element at the bottom of the header and centered through different breakpoints. I set two custom color properties that are going to be used for this specific section. I used <span>divs</span> to create the gold border underneath the header section.</p>

				<p class="quiet-voice">I broke down the <span>navigation module</span> into its own <span>div</span> container. Like the header section I used a <span>div</span> to define the bottom border of each <span>nav</span> element. Then, I used <span>flexbox</span> to have these paragraphs the nav to display row after smaller breakpoints.</p>
			</div>
			<!-- CONNECT CONTENT -->
			<div class="ny-container">
				<ny-nav>
					<p class="quiet-voice">Location</p>
					<h3 class="slow-voice">Shuttle Passage</h3>
				</ny-nav>

				<div class="space"></div>

				<ny-nav>
					<p class="quiet-voice">Phone</p>
					<h3 class="slow-voice">212-917-0603</h3>
				</ny-nav>

				<div class="space"></div>

				<ny-nav>
					<p class="quiet-voice">Category</p>
					<h3 class="slow-voice">Retail Shops</h3>
				</ny-nav>

				<div class="space"></div>

				<ny-nav>
					<p class="quiet-voice">Hours</p>
					<h3 class="slow-voice">M-Su: 11:00am-6:00pm</h3>
				</ny-nav>

				<div class="space"></div>

				<ny-nav>
					<p class="quiet-voice">Connect</p>
					<h3 class="slow-voice">FB, Twitter, Yelp</h3>
				</ny-nav>
			</div>
		</div>

	</section>
	</inner-column>
</section>