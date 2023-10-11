<?php
/**
 Template Name:  Get a quote for SEO
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

<section class="how wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title  title-sub"><?php the_field('how_title', 'options'); ?></h2>
    <p class="subtitle"><?php the_field('how_subtitle', 'options'); ?></p>
    <div class="how-wrap swiper-nav">
      <div class="arrows">
        <div class="arr arr-prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5303 5.46967C15.8232 5.76256 15.8232 6.23744 15.5303 6.53033L10.0607 12L15.5303 17.4697C15.8232 17.7626 15.8232 18.2374 15.5303 18.5303C15.2374 18.8232 14.7626 18.8232 14.4697 18.5303L8.46967 12.5303C8.17678 12.2374 8.17678 11.7626 8.46967 11.4697L14.4697 5.46967C14.7626 5.17678 15.2374 5.17678 15.5303 5.46967Z" fill="white"/>
          </svg>
        </div>
        <div class="arr arr-next">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 5.46967C8.17678 5.76256 8.17678 6.23744 8.46967 6.53033L13.9393 12L8.46967 17.4697C8.17678 17.7626 8.17678 18.2374 8.46967 18.5303C8.76256 18.8232 9.23744 18.8232 9.53033 18.5303L15.5303 12.5303C15.8232 12.2374 15.8232 11.7626 15.5303 11.4697L9.53033 5.46967C9.23744 5.17678 8.76256 5.17678 8.46967 5.46967Z" fill="white"/>
          </svg>
        </div>
      </div>
      <div class="how-wrap-slider wow animate__animated animate__fadeInUp swiper">
        <div class="swiper-wrapper">
          <?php if(have_rows('how_slider', 'options')) : while(have_rows('how_slider', 'options')) : the_row(); ?>
          <div class="swiper-slide item">
            <img src="<?php the_sub_field('image'); ?>" alt="step image">
            <small><?php the_sub_field('step'); ?></small>
            <b><?php the_sub_field('text'); ?></b>
          </div> 
          <?php endwhile; endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>

<?php if (get_field('seo_title')) { ?>
<section class="seo wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title "><?php the_field('seo_title'); ?></h2>
    <div class="content ">
      <?php the_field('seo_content'); ?>
    </div>
  </div>
</section>
<?php } ?>

<section class="question container wow animate__animated animate__fadeInUp">
  <div class="question-wrap ">
    <div class="left">
      <b>Got a question?</b>
      <p>We're here to help and answer any question you might have</p>
    </div>
    <div class="right">
      <?php echo do_shortcode('[contact-form-7 id="4a616eb" title="Got a question"]'); ?>
    </div>
  </div>
</section>



<?php
get_footer(); ?>





