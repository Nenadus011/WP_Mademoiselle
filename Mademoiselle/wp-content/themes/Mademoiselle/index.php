

<?php
get_header();
?>

<main>
    <?php
    get_template_part('/template-parts/lead');
    ?>

  <?php
  get_template_part('/template-parts/posts-loop');
  ?>
    


</main>


<?php
get_footer();
?>