<?php
/**
 Template Name: Commercial moving
*/

get_header();
?>
<section class="all-services page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title title-sub"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>
    
  </div>
</section>

<?php
get_footer();
