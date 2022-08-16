<?php
/*
 * Template Name: Contact Page
 */

get_header();


$address = get_option('mademoiselle_address');
$phone = get_option('mademoiselle_phone');
$email_1 = get_option('mademoiselle_email_1');
?>

<main>
    <section class="contact">
        <div class="container">
            <div class="row">                                              
                <div class="col-12 col-md-5 col-lg-6">
                    <article class="contact-item animation" data-animation="slideDown">
                        <h2 class="mb-5 text-uppercase">
                            <?php the_field('contact_title'); ?>
                        </h2>

                        <form class="contact-form" action="" method="post">
                           <?php the_field('contact_page_form') ?>
                        </form>
                    </article>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="container-fluid">

                      <?php the_field('contact_page_map') ?>
                    </div>
                </div> 
            </div>
        </div>

    </section>

    <section class="info text-center">
        <nav class="info-nav">
            <?php
            if(!empty($address)){
                ?>
              <a href="#" class="mb-3 text-decoration-none d-block animation" data-animation="slideUp" data-delay="0s"><?php echo $address ?></a>  
              <?php
            }
            ?>
              
               <?php
            if(!empty($phone)){
                ?>
             <a href="tel:560-748-5959" class="mb-3 text-decoration-none d-block animation" data-animation="slideUp" data-delay="0.2s"><?php echo $phone ?></a>  
              <?php
            }
            ?>
             
              <?php
            if(!empty($email_1)){
                ?>
               <a href="mailto:cullen_mueller@yahoo.com" class="mb-3 text-decoration-none d-block animation" data-animation="slideUp" data-delay="0.4s"><?php echo $email_1 ?></a>
              <?php
            }
            ?>
              
        </nav>
    </section>
</main>

<?php
get_footer();
?>