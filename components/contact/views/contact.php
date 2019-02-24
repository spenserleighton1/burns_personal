

<div id="the-contact" class="container the-contact">
    <div class="row contact-container">
        <?php $contactform = get_field('contact_form'); ?>

        <div id=”contact-form”>
             <?php echo do_shortcode($contactform) ?>
        </div>
        <div class="alt-contact">
            <h3>
                Shoot me a message or feel free to email me at <span>jaysaybay@gmail.com</span>. Thanks!
            </h3>
        </div>
    </div>
</div>

