

<section class="services">
    <div class="container">
        <h2 class="services-title text-uppercase">Our Services</h2>
        <?php
        $arg = array(
            'posts_per_page' => -1,
            'post_type' => 'our_services',
            'order' => 'ASC'
        );

        $homepageServices = new WP_Query($arg);

        if ($homepageServices->have_posts()) {
            while ($homepageServices->have_posts()) {
                $homepageServices->the_post();
                ?>
                <article class="services-item h-100">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-0">

                            <img class="d-block" src="<?php the_field('services_side_image'); ?>" alt=""/>

                        </div>
                        <div class="col-12 col-md-6 mb-0 text-center">                               
                            <h2 class="text-uppercase">
                                <?php the_field('services_description'); ?>
                            </h2>

                            <a href="<?php the_permalink(); ?>" class="btn text-uppercase mb-3 mb-lg-0">learn more</a>
                        </div>
                    </div>
                </article><!--services-item end--> 
                <?php
            }
        } else {
            ?>
            <div class="jumbotron">
                <h3>There are no services to show.</h3>
            </div>
            <?php
        }


        wp_reset_postdata();
        ?>

    </div><!--container end-->
</section><!--services-end-->