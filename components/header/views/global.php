<header id="navbar">
	<?php if ( has_nav_menu( 'utility' )) : ?>

		<nav class="utility-desktop clearfix">

			<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'utility',
					'menu_class'     	=> 'utility-menu'
				 ) );
			?>

		</nav>

	<?php endif; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12 clearfix">
				<div class="branding">
					<div class="logo">
						<img class="top" style="max-height: 50px" src="http://localhost:8080/wp-content/uploads/2019/02/Untitled_Artwork-2.png" alt="">
						<img             style="max-height: 50px" src="http://localhost:8080/wp-content/uploads/2019/02/Untitled_Artwork-3.png" alt="">
						<img             style="max-height: 50px; margin-left: 5px" src="http://localhost:8080/wp-content/uploads/2019/02/Untitled_Artwork.png" alt="">
					</div>
					<div class="selected-menu-item">
						<h2 class="map-hover">map</h2>
						<h2 class="paint-hover">gallery</h2>
						<h2 class="contact-hover">contact</h2>
						<h2 class="insta-hover">instagram</h2>
					</div>
					<div class="social-icons">
						<img class="paint" src="http://localhost:8080/wp-content/uploads/2019/02/palette.png" alt="paintings logo">
						<img class="contact" src="http://localhost:8080/wp-content/uploads/2019/02/closed-envelope-circle.png" alt="contact logo">
						<!-- <a href="https://www.instagram.com/jaysaybay/"> -->
						<img class="insta" src="http://localhost:8080/wp-content/uploads/2019/02/instagram-logo.png" alt="instagram logo">
						<!-- </a> -->
						<img class="map" src="http://localhost:8080/wp-content/uploads/2019/02/map.png" alt="map logo">
					</div>
				</div>

				<?php Components\View::render( 'header', 'navigation' ); ?>

			</div>
		</div>
	</div>
</header>