

   <?php
     if(is_home() &&  get_option('page_for_posts')){
          $leadImage = get_the_post_thumbnail_url(get_option('page_for_posts'), 'full');
          $leadTitle = get_the_title(get_option('page_for_posts'));
       
     }else{
        $leadImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
         $leadTitle = get_the_title();
       
        
     }
         ?>  
     
    
    
 <section class="lead-section" style="background-image:url(<?php echo $leadImage; ?>)">

                <h1 class="text-center animation" data-animation="zoom">
             <?php echo $leadTitle; ?>
                    </h1>

            </section><!--lead-section end-->


