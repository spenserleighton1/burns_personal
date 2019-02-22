<header>
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
						<h1>
							BURNS
						</h1>
					</div>

					<div class="social-icons">
						<a href="#">
							<img src="http://localhost:8080/wp-content/uploads/2019/02/twitter-logo-button.png" alt="twitter logo">
						</a>
						<a href="#">
							<img src="http://localhost:8080/wp-content/uploads/2019/02/instagram-logo.png" alt="instagram logo">
						</a>
						<a href="#">
							<img src="http://localhost:8080/wp-content/uploads/2019/02/facebook-logo-button.png" alt="facebook logo">
						</a>
					</div>
					<!-- <h1 class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> that shit</h1> -->
						
				</div>

				<?php Components\View::render( 'header', 'navigation' ); ?>

			</div>
		</div>
	</div>
</header>