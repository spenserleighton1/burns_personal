

<div id="the-instagram" class="container the-instagram">
    <!-- <div class="row"> -->
        <?php $instagram = get_field('instagram_feed'); ?>

        <div id=”instagram”>
            <?php echo do_shortcode($instagram) ?>
        </div>
    <!-- </div> -->
</div>