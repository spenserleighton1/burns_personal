<?php 
    // Main photo gallery

if($DATA){ ?>
    <div class="container">
        <div class="row gallery-container">
            <?php foreach($DATA->images as $image){ ?>
                <div class="gallery-box">
                    <img style="display: none" src="<?php echo $image->url; ?>" alt="for modal purposes">
                    <div class="bg-image" style="background-image: url('<?php echo $image->url; ?>')"></div>
                    <div class="gallery-inner">
                        <h2 class="gallery-title">
                            <?php echo $image->title; ?>
                        </h2> 
                    </div>
                </div>

                <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">              
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <img src="" class="imagepreview" style="width: 100%;" >
                    </div>
                    </div>
                </div>
                </div>


            <?php } ?>
        </div>
    </div>
<?php } ?>
