
<?php
/*
 * Template Name: Services Page
 */


get_header();
?>

<main>
    <?php
    get_template_part('/template-parts/lead');
    ?>

    <section class="services">
        <div class="container">            
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    the_content();
                }
            }
            ?>


            <?php
            $arg = array(
                'post_per_page' => -1,
                'post_type' => 'our_services',
                'order' => 'ASC',
                'orderby' => 'date'
            );

            $services = new WP_Query($arg);

            if ($services->have_posts()) {

                while ($services->have_posts()) {
                    $services->the_post();
                    ?>               
                    <article class="services-item h-100">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-0">

                                <img class="d-block" src="<?php the_field('services_side_image') ?>" alt=""/>

                            </div>
                            <div class="col-12 col-md-6 mb-0 text-center">                               
                                <h2 class="text-uppercase">
                                    <?php the_field('services_description'); ?>
                                </h2>

                                <a href="<?php the_permalink(); ?>" class="btn text-uppercase mb-4 mb-lg-0">learn more</a>
                            </div>
                        </div>
                    </article>



                        <?php
                    }
                }


                wp_reset_postdata();
                ?>



        </div><!--container end-->
    </section><!--services-end-->

</main>





<?php
get_footer();
?>