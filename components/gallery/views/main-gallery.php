<?php 
    // Main photo gallery

if($DATA){ ?>
    <div class="container the-gallery">
        <div class="row gallery-container">
            <?php foreach($DATA->images as $image){ ?>

                <div class="gallery-image">
                    <img src="<?php echo $image->url; ?>">
                    <div>
                        <h4><?php echo $image->title; ?><span><?php echo $image->description; ?></span></h4>
                    </div>
                </div>
                <br>
            <?php } ?>
        </div>
    </div>
<?php } ?>
