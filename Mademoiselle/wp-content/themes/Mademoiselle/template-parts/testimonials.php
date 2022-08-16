

<section class="team">
        <div class="container">
            <h2 class="team-title text-uppercase">
                <?php the_field('homepage_team_title'); ?>
            </h2>
            <?php
            $arg = array(
                'posts_per_page' => -1,
                'post_type' => 'testimonials',
                'order' => 'ASC'
            );

            $homepageTestimonials = new WP_Query($arg);

            if ($homepageTestimonials->have_posts()) {
                ?>
                <ul class="team-member-slider owl-carousel owl-theme list-unstyled">  
                    <?php
                    while ($homepageTestimonials->have_posts()) {
                        $homepageTestimonials->the_post();
                        ?>
                        <li class="team-member">
                            <div class="row justify-content-around">
                                <div class="col-12 col-md-4">
                                    <article class="team-item mb-5 mb-md-0">
                                        <a href="<?php the_permalink(); ?>" class="d-block">
                                         <?php the_post_thumbnail('testimonial-lead'); ?>
                                        </a>
                                    </article>
                                </div>

                                <div class="col-12 col-md-4">
                                    <article class="team-item">
                                        <h2 class="team-item-title text-uppercase mb-5">
                                            <?php the_title(); ?>
                                        </h2>
                                        <p class="team-item-text">
                                            <?php the_content(); ?>                   
                                        </p>
                                    </article>
                                </div><!--col-end-->

                            </div><!--row-end-->
                        </li><!--team member end-->

                        <?php
                    }
                }
                ?>             
        </div><!--container-end-->
    </section><!--team-end-->