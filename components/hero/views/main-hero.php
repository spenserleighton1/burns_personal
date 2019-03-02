<?php 
    // Main Hero
    // hero_image->url
    // hero_title->str
    // hero_link->url 
?>



<section id="hero">
    <div class="hero-main" style="background-image: url('<?php echo $DATA->hero_image; ?>');"></div>
    <div class="hero-content">
        <h1 id="burns-title"><?php echo $DATA->hero_text; ?></h1>
        <!-- <a href="#" class="button"><?php echo $DATA->hero_test ?></a> -->
    </div>
</section>