

<?php
get_header();
?>


<main>
    <section class="lead-section" style="background-image:url(<?php
    bloginfo('url');
    echo '/wp-content/uploads/2022/08/search-scaled.jpg'
    ?>)">

        <h1 class="text-center animation" data-animation="zoom">
            <span class="text-uppercase">Search result for:</span><br>
<?php echo get_search_query(); ?>
        </h1>

    </section><!--lead-section end-->

    <section class="search-section">

        <div class="w-100">
            <?php
            if (have_posts()) {
                ?>
                <section class="blog text-center">
                    <div class="container-fluid">
                        <div class="row text-center">

                            <?php
                            while (have_posts()) {
                                the_post();
                                ?>

                                <div class="col-12 col-sm-6 col-lg-4">
                                    <article class="blog-item animation" data-animation="slideUp">
                                        <a href="<?php the_permalink(); ?>" class="d-block">
        <?php the_post_thumbnail('blog-list'); ?>
                                        </a>
                                        <div class="blog-news position-relative">
                                            <p class="date"><?php the_date('j/m/Y'); ?></p>
                                            <p class="blog-news-text text-uppercase"><?php the_title(); ?></p>
                                        </div>
                                    </article>
                                </div><!--col end-->

                                <?php
                            }
                            ?>
                        </div><!--row end-->
                    </div><!--container end-->
                </section><!--blog end-->

                <section class="blog-pagination text-center mb-5">
                    <div class="container-fluid">
                        <?php
                        the_posts_pagination(array(
                            'screen_reader_text' => ' ',
                            'mid_size' => 2,
                            'prev_text' => '&laquo;',
                            'next_text' => '&raquo;'
                        ));
                        ?>
                    </div>
                </section>

                <?php
            } else {
                ?>
                <section class="blog text-center">
                    <div class="container-fluid">          
                        <div class="jumbotron">
                            <h3>There are no post to show</h3>
                        </div>            
                    </div><!--container end-->
                </section><!--blog end-->
                <?php
            }
            ?>

        </div>

    </section>

</main>

<?php
get_footer();
?>