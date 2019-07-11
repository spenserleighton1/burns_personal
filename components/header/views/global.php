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
						<a href="/">
							<img class="top" src="<?php echo get_stylesheet_directory_uri().'/assets/images/boy-blink.png'; ?>" alt="">
							<img 			 src="<?php echo get_stylesheet_directory_uri().'/assets/images/boy.png'; ?>" alt="">
							<img id="blogo" style="; margin-left: 5px" src="<?php echo get_stylesheet_directory_uri().'/assets/images/signature.png'; ?>" alt="">
						</a>
					</div>
					<div class="selected-menu-item">
						<h2 class="map-hover">map</h2>
						<h2 class="paint-hover">gallery</h2>
						<h2 class="contact-hover">contact</h2>
						<h2 class="insta-hover">instagram</h2>
					</div>
					<div class="social-icons">
						<div>
							<img class="paint paint-h" src="<?php echo get_stylesheet_directory_uri().'/assets/images/gal-h.png'; ?>" alt="paintings logo">
							<img class="paint" src="<?php echo get_stylesheet_directory_uri().'/assets/images/gal.png'; ?>" alt="paintings logo">
						</div>
						<div>
							<img class="contact contact-h" src="<?php echo get_stylesheet_directory_uri().'/assets/images/mail-h.png'; ?>" alt="contact logo">
							<img class="contact" src="<?php echo get_stylesheet_directory_uri().'/assets/images/mail.png'; ?>" alt="contact logo">
						</div>
						<div>
							<img class="insta insta-h" src="<?php echo get_stylesheet_directory_uri().'/assets/images/ig-h.png'; ?>" alt="instagram logo">
							<img class="insta" src="<?php echo get_stylesheet_directory_uri().'/assets/images/ig.png'; ?>" alt="instagram logo">
						</div>
						<div>
							<img class="map map-h" src="<?php echo get_stylesheet_directory_uri().'/assets/images/map-h.png'; ?>" alt="map logo">
							<img class="map" src="<?php echo get_stylesheet_directory_uri().'/assets/images/map.png'; ?>" alt="map logo">
						</div>
					</div>
				</div>

				<?php Components\View::render( 'header', 'navigation' ); ?>

			</div>
		</div>
	</div>
</header>