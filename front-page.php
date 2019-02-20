<?php
/**
 * The Front Page
 */

get_header();
	
	while ( have_posts() ) : the_post(); ?>
		<?php
		/**
		 * This is an example of how to use the component system
		 * Instead of StdClass, you can create your own classes to organize you structure
		 * @var StdClass
		 */
		
		$hero = new StdClass;
		$hero->hero_image  = get_field('hero_image');
		$hero->hero_text  = get_field('hero_text');
		$hero->hero_link  = get_field('hero_link');
		$hero->hero_test  = 'testingitout';

		Components\View::render('hero', 'main-hero', $hero);

		the_content();

		?>

	<?php endwhile;

get_footer(); ?>