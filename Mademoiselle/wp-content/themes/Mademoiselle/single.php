
<?php
get_header();
?>

<main>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            
           // $featureImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <section class="blog-single">
                <div class="container">
                    <div class="d-flex mb-3">                       
                      <?php     
                          $blogCategories = get_the_category(get_the_ID()); 
                          foreach ($blogCategories as $blogCategory) {
                              ?>
                        <a class="hair" href="<?php echo get_category_link($blogCategory->term_id) ?>" ><?php echo $blogCategory->name; ?> </a>
                            <?php
                          }    
                      ?>
                        </a>
                        <span class="date"><?php the_date('j/m/Y'); ?></span> 
                    </div>
                    <div class="row justify-content-between">                     
                        <div class="col-12 col-lg-5">
                            <article class="blog-single-item">
                                <h2 class="blog-single-item-title text-uppercase mb-5">                                   
                                       <?php the_title(); ?>                                  
                                </h2>
                                <?php the_excerpt(); ?>
                            </article>
                        </div><!--col-end-->

                        <div class="col-12 col-lg-6">
                            <article class="blog-single-item mb-5 mb-md-0">
                                <a href="#" class="d-block">
                                    <?php the_post_thumbnail('blog-single-lead'); ?>
                                </a>
                            </article>
                        </div>

                    </div><!--row-end-->
                </div><!--container-end-->
            </section><!--blog-single-end-->


            <section class="blog-single-description">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <article>
                                <?php the_content(); ?>
                            </article>

                            <article class="blog-tags">
                                <p class="tag-title">Tags:</p>

                                <div class="tags">
                                    <?php
                                    $blogTags = get_the_tags(get_the_ID());
                                    foreach ($blogTags as $blogTag){
                                        ?>
                                    <a href="<?php echo get_tag_link($blogTag->term_id) ?>" class="btn btn-light py-2 px-4"><?php echo $blogTag->name  ?></a>
                                    <?php
                                    }
                                    ?>
           
                                </div>
                            </article>
                        </div>
                    </div>
            </section>
            <?php
        }
    }
    ?>


</main>

<?php
get_footer();
?>

