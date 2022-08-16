

<?php
/*
 * Template Name: Page With Sidebar
 */
get_header();
?>

<main>

    <?php
    get_template_part('/template-parts/lead');
    ?>
    
    <?php
    
    if(have_posts()){
        while (have_posts()){
            the_post();
            ?>
      <section class="about">
                <div class="container">                                    
                    <div class="row">
                        <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                            <article class="about-content">
                                 <?php the_content();  ?>
                            </article>
                        </div>
                         <div class="col-12 col-sm-9 col-lg-4">
                             <aside>
                              <?php get_sidebar(); ?>
                             </aside>
                         </div>
                    </div><!-- row end -->
                </div><!-- container end -->
      </section>
                        <?php
        }
    }
    
    
    ?>
                         

</main>

<?php
get_footer();
?>


