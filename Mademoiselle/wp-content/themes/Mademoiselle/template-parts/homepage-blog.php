



<section class="blog">
    <div class="container">
        <h2 class="blog-title text-uppercase"><?php the_field('homepage_blog_title'); ?></h2>
        <?php
        $arg = array(
            'posts_per_page' => 3,
            'order' => 'DSC'
        );
        $homepageBlog = new WP_Query($arg);

        if ($homepageBlog->have_posts()) {
            ?>
            <div class="row text-center">
                <?php
                while ($homepageBlog->have_posts()) {
                    $homepageBlog->the_post();
                    ?>
                    <div class="col-12 col-sm-9 col-lg-4">
                        <article class="blog-item animation" data-animation="slideUp">
                            <a href="<?php the_permalink(); ?>" class="d-block">
                                <img class="d-block w-100 h-75" src=" <?php the_post_thumbnail('blog-list'); ?>" alt=""/>
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
            </div>
            <?php
        } else {
            ?>
            <div class="jumbotron">
                <h3>
                    There are no blog to show.
                </h3>
            </div>
            <?php
        }

        wp_reset_postdata();
        ?>

    </div><!--container end-->
</section><!--blog end-->
