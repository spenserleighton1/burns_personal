<?php 
    // Main photo gallery

if($DATA){ ?>
    <div class="container">
        <div class="row gallery-container">
            <?php foreach($DATA->images as $image){ ?>
                <div class="gallery-box">
                    <div class="bg-image" style="background-image: url('<?php echo $image->url; ?>')"></div>
                    <div class="gallery-inner">
                        <h2 class="gallery-title">
                            <?php echo $image->title; ?>
                        </h2> 
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
