<?php 
    // Main Hero
    // hero_image->url
    // hero_title->str
    // hero_link->url 
?>


    <!-- <video class="hero-mai" autoplay loop id="video-background" muted plays-inline>
        <source src="<?php echo get_stylesheet_directory_uri().'/assets/images/burns.mp4'; ?>" type="video/mp4">
    </video> -->

<section id="hero">
    <div class="hero-main" style="background-image: url('<?php echo get_stylesheet_directory_uri().'/assets/images/burns-wall_.gif'; ?>');"></div>
    <div class="hero-content">
        <h1 class="hero-title" id="hero-title"><?php echo $DATA->hero_text; ?></h1>
    </div>
</section>