<?php
/**
 Template Name:  Get a quote
*/

get_header();
?>

<section class="quote-page page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title title-sub"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>
    
      <?php the_content(); ?>
    
    
  </div>
</section>




<?php
get_footer(); ?>





