<?php
/**
 * Template Name: About
 */
?>

<?php
get_template_part('templates/site-intro');
?>

<section class="quote">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                <blockquote class="blockquote justify-content-center align-middle">
                    <p class="quote"><?php echo get_field('quote'); ?></p>
                    <div class="footer">
                        <p class="author"><?php echo get_field('author'); ?></p>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container">
                <?php if (have_rows('content_block_b')): ?>

                    <?php while (have_rows('content_block_b')) : the_row(); ?>

                        <?php
                        $icon_object = get_sub_field('icon');
                        $icon_size = "50x50";
                        $icon = $icon_object['sizes'][$icon_size];
                        $icon_alt = $icon_object['alt'];
                        $icon_title = $icon_object['title'];
                        ?>

                        <div class="row content-item">
                            <div class="col-12 content-block-b d-flex align-items-center">
                                <img src="<?php echo $icon; ?>"
                                     alt="<?php echo $icon_alt; ?>"
                                     title="<?php echo $icon_title; ?>"/>
                                <h2><?php the_sub_field('headline')?></h2>
                            </div>
                            <div class="col-12">
                                <p><?php the_sub_field('text_body') ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
    </div>
</section>





