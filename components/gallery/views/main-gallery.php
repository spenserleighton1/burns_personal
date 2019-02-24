<?php 
    // Main photo gallery

if($DATA){ ?>
    <div class="container the-gallery">
        <div class="row gallery-container">
            <?php foreach($DATA->images as $image){ ?>

                <div class="gallery-box">
                    <img 
                    style="display: none" 
                    src="<?php echo $image->url; ?>" 
                    title="<?php echo $image->title; ?>" 
                    description="<?php echo $image->description; ?>"
                    year="<?php echo $image->year; ?>"
                    >
                    <div class="bg-image" style="background-image: url('<?php echo $image->url; ?>')"></div>
                    <div class="gallery-inner">
                        <h2 class="gallery-title">
                            <?php echo $image->title; ?>
                        </h2> 
                    </div>
                </div>

                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" src="" id="img01">
                    <div class="gallery-details">
                        <h2>
                            <span id="title"></span>
                            <span id="year"></span>
                        </h2>
                        <p id="description"></p>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
<?php } ?>
