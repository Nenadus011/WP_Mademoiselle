<?php
get_header();
?>


<main>
    <!--Include part for Homepage Lead  Section-->
    <?php
    get_template_part('/template-parts/lead');
    ?>

    <!--Include part for Homepage blog-->
    <?php
    get_template_part('/template-parts/homepage-blog');
    ?>

    <!--Include part for Homepage services-->
    <?php
    get_template_part('/template-parts/homepage-services');
    ?>


   <!--include part for testimonials -->
   <?php
   get_template_part('/template-parts/testimonials');
   ?>

</main>




<?php
get_footer();
?>