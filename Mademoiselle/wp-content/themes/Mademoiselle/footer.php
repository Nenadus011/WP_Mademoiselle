       <footer class="bg-white">
            <div class="container text-center">
                
                <?php
                
                $menuLocations = get_nav_menu_locations();
                $socialMenuID = $menuLocations['social'];
                $socialMenuItems = wp_get_nav_menu_items($socialMenuID);
                
                if($socialMenuItems){
                    ?>
                <nav class="social mb-4">
                    <?php
                    foreach($socialMenuItems as $socialItem){
                        if($socialItem->menu_item_parent == 0){
                            ?>
                    <a href="<?php echo $socialItem->url ?>" class="fab fa-<?php echo strtolower($socialItem->title); if($socialItem->title == 'Facebook'){echo "-f";} ?>"></a> 
                    <?php
                        }
                    }
                    ?>
                </nav>
                <?php
                }
                
                ?>
                
                <p class="copyright">
                    Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                </p>
            </div>
        </footer><!--footer end-->

           
        <?php
        //Include default WP js file
        wp_footer();
        ?>
    </body>
</html>




