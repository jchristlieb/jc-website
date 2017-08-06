<section class="project-gallery">
    <div class="container d-flex p-2 justify-content-center">
        <div class="row">
            <div class="col-12">

                <?php
                $screenshot_laptop = get_field('screenshot_desktop');
                $size = "800x450";
                $screenshot = $screenshot_laptop['sizes'][$size];
                ?>

                <div class="screenshot-pc">
                    <img src="<?php echo $screenshot ?>"
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-info">
    <div class="container d-flex p-2 justify-content-center">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="project-item">
                    <h2><?php echo the_field('project_description_label') ?></h2>
                    <div class="divider"></div>
                    <p><?php echo the_field('project_description') ?></p>
                </div>
                <div class="project-item">
                    <h2><?php echo the_field('technology_label') ?></h2>
                    <div class="divider"></div>
                    <ul>
                        <?php while (has_sub_field('technology')) {
                            $tech_item = get_sub_field('tech_item'); ?>

                            <li class="tech-item"><?php echo $tech_item ?></li>

                        <?php } ?>
                    </ul>
                </div>
                <?php if (get_field('project_credits')) : ?>
                    <div class="project-item">
                        <h2><?php echo the_field('credit_label') ?></h2>
                        <div class="divider"></div>
                        <p><?php echo the_field('project_credits') ?></p>
                    </div>
                <?php else: ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="project-box">
                    <div class="project-logo d-flex p-2 justify-content-center">

                        <?php
                        $logo_object = get_field('project_logo');
                        $logo_size = "150x150";
                        $project_logo = $logo_object['sizes'][$logo_size];
                        $logo_title = $logo_object['title'];
                        $logo_alt = $logo_object['alt'];
                        ?>

                        <img class="img-fluid" src="<?php echo $project_logo ?>"
                             title="<?php echo $logo_title ?>" alt="<?php echo $logo_alt ?>">
                    </div>
                    <div class="project-about">
                        <p><?php echo the_field('project_about'); ?></p>
                        <?php if (get_field('project_url')) : ?>
                            <p><a class="project-link" href="<?php echo the_field('project_url') ?>"
                                  target="_blank"><?php echo the_field('project_url_anchor') ?></a></p>
                        <?php else: ?>
                        <?php endif; ?>
                        <?php if (get_field('project_duration')) : ?>
                            <p class="project-duration"><?php echo the_field('project_duration') ?></p>
                        <?php else: ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
