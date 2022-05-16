<?php get_header();?>
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <?php the_field('recruitment'); ?>
                        <div class="text-wrap">
                            <?php the_field('recruitment2'); ?>
                        </div>
                        <button><?php the_field('recruitment_button'); ?></button>
                    </div>
                </div>
            </div>
            <div class="col circles">
                
            </div>
        </div> 
    </div>
</section>

<section class="section bg-dark-green">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <?php the_field('process'); ?>
                    </div>
                </div>
            </div>
            <div class="col wheel">
                
            </div>
        </div> 
    </div>
</section>

<section class="section bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
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
            <div class="col peeps">
                
            </div>
        </div> 
    </div>
</section>

<?php get_footer();?>