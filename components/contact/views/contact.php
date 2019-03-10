

<div id="the-contact" class="container the-contact">
    <div class="row contact-container">
        <?php $contactform = get_field('contact_form'); ?>

        <div id=”contact-form”>
             <?php echo do_shortcode($contactform) ?>
        </div>
        <div class="alt-contact">
            <h3>
                <?php echo get_field('contact_form_text'); ?>
            </h3>
        </div>
    </div>
</div>

