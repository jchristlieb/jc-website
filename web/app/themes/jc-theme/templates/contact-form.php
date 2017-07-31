<section class="contact" id="contact">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <?php if ($form_headline = get_field('form_headline')): ?>
                    <h2 class="anchor" id="<?php echo get_field('form_section_name') ?>"><?php echo($form_headline) ?></h2>
                <?php endif; ?>
                <hr/>
                <?php if ($form_about = get_field('form_about')): ?>
                    <p class="lead"><?php echo do_shortcode($form_about) ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="contact-form">
            <?php
            $form = get_field('form_shortcode');
            ?>
            <?php if ($form): ?>
                <?php echo do_shortcode($form) ?>
            <?php endif; ?>
        </div>

    </div>
</section>