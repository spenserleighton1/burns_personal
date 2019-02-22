<?php
/**
 * Standard Page Template
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

		$about = new StdClass;
		$about->text = get_field('about');

		Components\View::render('about', 'about', $about);		

		if (have_rows('gallery_content')) :
			$gallery = new StdClass;
			$gallery->images = array();
			while (have_rows('gallery_content')) : the_row();
			  $image = new StdClass;
			  $image->title = get_sub_field('title');
			  $image->url = get_sub_field('image');
			  $image->year = get_sub_field('year');
			  $image->description = wp_trim_words(get_sub_field('description'), 20);
			  array_push($gallery->images, $image);
			endwhile;

			Components\View::render('gallery', 'main-gallery', $gallery);
		  endif;

		
		?>

		<?php the_content(); ?>

	<?php endwhile;

get_footer(); ?>