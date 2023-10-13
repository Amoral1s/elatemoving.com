<?php
/**
 Template Name: Reviews
*/

get_header();
?>

<div class="bg-section bg-section-top">
  <div class="container page-top">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
  </div>
  <section class="reviews-offer container">
    <div class="left">
      <h1 class="page-title"><?php the_field('title') ?></h1>
      <div class="text">
        <?php the_field('subtitle') ?>
      </div>
      <div class="button button-accent add-review">
        Write a review
      </div>
    </div>
    <div class="right">
      <img src="<?php echo get_template_directory_uri(); ?>/img/yelp_22.svg" alt="Yelp_2022">
      <img src="<?php echo get_template_directory_uri(); ?>/img/yelp_23.svg" alt="Yelp_2023">
    </div>
  </section>
  <section class="reviews-list">
    <div class="container">
      <?php if(have_rows('reviews')) : while(have_rows('reviews')) : the_row(); ?>
      <div class="item wow animate__animated animate__fadeInUp">
        <div class="top">
          <div class="avatar">
            <?php if (get_sub_field('avatar')) { ?>
              <img src="<?php the_sub_field('avatar'); ?>" alt="Avatar">
            <?php } else {?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/avatar.svg" alt="Avatar">
            <?php }?>
          </div>
          <div class="top-right">
            <div class="name-date">
              <b><?php the_sub_field('name'); ?></b>
              <p><?php the_sub_field('date'); ?></p>
            </div>
            <div class="star-rating">
              <?php 
                $stars = get_sub_field('star_rating');
                for ($i = 0; $i < $stars; $i++ ) { 
              ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/star.svg" alt="star">
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="content"><?php the_sub_field('review_text'); ?></div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </section>
  <?php if(have_rows('reviews_page')) : while(have_rows('reviews_page')) : the_row(); ?>
  <section class="reviews no-label">
    <div class="container">
      <h2 class="title ">
        <?php the_sub_field('reviews_title'); ?>
      </h2>
      <div class="swiper-nav reviews-main">
        <div class="arr arr-prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5303 5.46967C15.8232 5.76256 15.8232 6.23744 15.5303 6.53033L10.0607 12L15.5303 17.4697C15.8232 17.7626 15.8232 18.2374 15.5303 18.5303C15.2374 18.8232 14.7626 18.8232 14.4697 18.5303L8.46967 12.5303C8.17678 12.2374 8.17678 11.7626 8.46967 11.4697L14.4697 5.46967C14.7626 5.17678 15.2374 5.17678 15.5303 5.46967Z" fill="white"/>
          </svg>
        </div>
        <div class="reviews-wrap swiper wow animate__animated animate__fadeInUp">
          <div class="swiper-wrapper reviews-slider">
            <?php if(have_rows('reviews_slider')) : while(have_rows('reviews_slider')) : the_row(); ?>
            <div class="item swiper-slide">
              <div class="star-rating">
                <?php 
                  $stars = get_sub_field('star_rating');
                  for ($i = 0; $i < $stars; $i++ ) { 
                ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/star.svg" alt="star">
                <?php } ?>
              </div>
              <p>
                <?php the_sub_field('content'); ?>
              </p>
              <div class="item-bottom">
                <?php if (get_sub_field('source_link') && get_sub_field('icon')) { ?> 
                <a class="icon" href="<?php the_sub_field('source_link'); ?>">
                  <img src="<?php the_sub_field('icon'); ?>" alt="icon">
                </a>
                <?php } else if (!get_sub_field('source_link') && get_sub_field('icon')) { ?>
                  <div class="icon">
                    <img src="<?php the_sub_field('icon'); ?>" alt="icon">
                  </div>
                <?php } ?>
                <div class="name">
                  <b><?php the_sub_field('name'); ?></b>
                  <small><?php the_sub_field('date'); ?></small>
                </div>
              </div>
            </div>
            <?php endwhile; endif; ?>

          </div>
        </div>
        <div class="arr arr-next">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 5.46967C8.17678 5.76256 8.17678 6.23744 8.46967 6.53033L13.9393 12L8.46967 17.4697C8.17678 17.7626 8.17678 18.2374 8.46967 18.5303C8.76256 18.8232 9.23744 18.8232 9.53033 18.5303L15.5303 12.5303C15.8232 12.2374 15.8232 11.7626 15.5303 11.4697L9.53033 5.46967C9.23744 5.17678 8.76256 5.17678 8.46967 5.46967Z" fill="white"/>
          </svg>
        </div>
      </div>
      
    </div>
  </section>
  <?php endwhile; endif; ?>
</div>

<!--Microdata organisation-->
<div itemscope itemtype="http://schema.org/Organization">
  <meta itemprop="name" content="Elate Moving | Professional Moving Services">
	<!-- <meta itemprop="priceRange" content="от 60 000 ₽"> -->
	<meta itemprop="description" content="Elate Moving is a professional moving and storage company with the most trustworthy, dedicated, expert and white glove NYC movers.">
  <meta itemprop="telephone" content="<?php the_field('phone', 'options'); ?>">
	<meta itemprop="email" content="<?php the_field('email', 'options'); ?>">
  <link itemprop="url" href="<?php echo get_permalink(); ?>">
	<link itemprop="logo image" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <meta itemprop="addressCountry" content="US">
    <meta itemprop="addressLocality" content="New York">
    <meta itemprop="streetAddress" content="305 Broadway Floor 7 New York, NY 10007">
  </div>
</div>


<?php
get_footer();
