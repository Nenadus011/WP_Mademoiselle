<?php
get_header();
?>

<main>

    <?php
    $leadImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>

    <section class="services-single">
        <div class="container">                   
            <div class="row justify-content-around">
                <div class="col-12 col-md-6">
                    <article class="services-single-item mb-5 mb-md-0 animation" data-animation="slideRight">
                        <a href="#" class="d-block">
                            <img src="<?php echo $leadImage; ?>" alt=""/>
                        </a>
                    </article>
                </div>

                <div class="col-12 col-md-5">
                    <article class="services-single-item animation" data-animation="slideLeft">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <div class="services-single-item-text">
                            <p>
                                <?php
                                the_content();
                                ?>
                            </p>
                        </div>
                    </article>
                </div><!--col-end-->

            </div><!--row-end-->
        </div><!--container-end-->
    </section><!--team-end-->



    <!--Include part for Homepage blog-->
    <?php
    get_template_part('/template-parts/homepage-blog');
    ?>

</main>



<?php
get_footer();
?>