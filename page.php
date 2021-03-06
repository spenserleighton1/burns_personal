<?php
/**
 * Standard Page Template
 */


	while ( have_posts() ) : the_post(); ?>
		<?php
		/**
		 * This is an example of how to use the component system
		 * Instead of StdClass, you can create your own classes to organize you structure
		 * @var StdClass
		 */
		
		//  HERO SECTION
		$hero = new StdClass;
		$hero->hero_image  = get_field('hero_image');
		$hero->hero_text  = get_field('hero_text');
		$hero->hero_link  = get_field('hero_link');

		Components\View::render('hero', 'main-hero', $hero);

get_header();

		// ABOUT SECTION
		$about = new StdClass;
		$about->text = get_field('about');

		Components\View::render('about', 'about', $about);		

		// GALLERY PHOTOS
		if (have_rows('gallery_content')) :
			$gallery = new StdClass;
			$gallery->images = array();
			while (have_rows('gallery_content')) : the_row();
			  $image = new StdClass;
			  $image->title = get_sub_field('title');
			  $image->url = get_sub_field('image');
			  $image->year = get_sub_field('year');
			  $image->description = wp_trim_words(get_sub_field('description'), 50);
			  array_push($gallery->images, $image);
			endwhile;

			Components\View::render('gallery', 'main-gallery', $gallery);
		endif;

	
		// MAP SECTION
		if (have_rows('map_locations')) :
			$map = new StdClass;
			$map->locations = array();
			while (have_rows('map_locations')) : the_row();
			  $location = new StdClass;
			  $location->title = get_sub_field('title');
			  $location->lat = get_sub_field('lat');
			  $location->long = get_sub_field('long');
			  $location->image = get_sub_field('image');
			  $location->description = wp_trim_words(get_sub_field('description'), 50);
			  array_push($map->locations, $location);
			endwhile;
			Components\View::render('map', 'map', $map);
		endif;

		// CONTACT FORM
		Components\View::render('contact', 'contact');

		// INSTAGRAM
		Components\View::render('instagram', 'instagram');
		
		?>

		<?php the_content(); ?>

	<?php endwhile;

get_footer();
 ?>