<?php get_header();?>

<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col">
                        <?php the_field('recruitment'); ?>
                        <div class="text-wrap">
                            <?php the_field('recruitment2'); ?>
                        </div>
                        <button class="action-button"><?php the_field('recruitment_button'); ?></button>
                    </div>
                </div>
            </div>
            <div class="circles col-lg-6">
                <div class="circle large-wrapper">
                    <div class="bg large-top" style="background-image: url(<?php bloginfo('template_url') ?>/images/circles/top.svg )"></div>
                    <div class="bg large-bottom" style="background-image: url(<?php bloginfo('template_url') ?>/images/circles/bottom.svg )"></div>
                </div>
                <div class="circle medium-wrapper">
                    <div class="bg medium-top" style="background-image: url(<?php bloginfo('template_url') ?>/images/circles/top.svg )"></div>
                    <div class="bg medium-bottom" style="background-image: url(<?php bloginfo('template_url') ?>/images/circles/bottom.svg )"></div>
                </div>
                <div class="circle small-wrapper">
                    <div class="bg small-top" style="background-image: url(<?php bloginfo('template_url') ?>/images/circles/top.svg )"></div>
                    <div class="bg small-bottom" style="background-image: url(<?php bloginfo('template_url') ?>/images/circles/bottom.svg )"></div>
                </div>
            </div>
        </div> 
    </div>
</section>

<section class="section bg-dark-green">
<div class="bg wheel wheel-desktop desktop-only" style="background-image:url(<?php the_field('process_image'); ?>);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col">
                        <?php the_field('process'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            <div class="wheel wheel-mobile mobile-only" style="background-image:url(<?php the_field('process_image'); ?>);"></div>
            </div>
        </div> 
    </div>
</section>

<section class="section bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col">
                        <?php the_field('team'); ?>
                        <div class="text-wrap">
                            <?php the_field('team2'); ?>
                        </div>
                        <button><?php the_field('team_button'); ?></button>
                    </div>
                </div>
            </div>
            <div class="peeps col-md-6">
                
            </div>
        </div> 
    </div>
</section>

<?php get_footer();?>