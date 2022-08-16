<?php
get_header();
?>

<main>
   
    <section class="lead-section error-page text-white">
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-7">
                            <article>
                    <h1 class="animation" data-animation="zoom"> 
                        Eror 404
                        Page not found</h1>
                            </article>
                    </div>
                    </div>

                    <a href="<?php echo home_url(); ?>" class="btn text-uppercase text-white px-4 py-2">back to home</a>
                </div>
            </section><!--lead-section end-->
 
    
</main>

<?php
    get_footer();

?>
