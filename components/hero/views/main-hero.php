<?php 
    // Main Hero
    // hero_image->url
    // hero_title->str
    // hero_link->url 
?>



<section id="hero">
    <div class="hero-main" style="background-image: url('<?php echo get_stylesheet_directory_uri().'/assets/images/burns_wall.gif'; ?>');"></div>
    <div class="hero-content">
        <h1><?php echo $DATA->hero_text; ?></h1>
        <!-- <a href="#" class="button"><?php echo $DATA->hero_test ?></a> -->
    </div>
</section>

<source src="<?php echo get_stylesheet_directory_uri().'/assets/images/aces.mp4'; ?>" type="video/mp4">