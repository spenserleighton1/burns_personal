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
						<h1>JEREMY BURNS</h1>
					</div>
					<div class="selected-menu-item">
						<h1 class="map-hover">map</h1>
						<h1 class="paint-hover">gallery</h1>
						<h1 class="contact-hover">contact</h1>
						<h1 class="insta-hover">instagram</h1>
					</div>
					<div class="social-icons">
						<img class="map" src="http://localhost:8080/wp-content/uploads/2019/02/map.png" alt="map logo">
						<img class="paint" src="http://localhost:8080/wp-content/uploads/2019/02/palette.png" alt="paintings logo">
						<img class="contact" src="http://localhost:8080/wp-content/uploads/2019/02/closed-envelope-circle.png" alt="contact logo">
						<img class="insta" src="http://localhost:8080/wp-content/uploads/2019/02/instagram-logo.png" alt="instagram logo">
					</div>
				</div>

				<?php Components\View::render( 'header', 'navigation' ); ?>

			</div>
		</div>
	</div>
</header>