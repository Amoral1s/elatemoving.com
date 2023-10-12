<?php
/**
 Template Name:  Career
*/

get_header();
?>

<section class="career page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title title-sub"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('diff_subtitle'); ?></p>
    <div class="diff-wrap">
      <?php if(have_rows('career_cards')) : while(have_rows('career_cards')) : the_row(); ?>
      <div class="item">
        <img src="<?php the_sub_field('icon'); ?>" alt="icon">
        <b><?php the_sub_field('title'); ?></b>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="vacancy">
  <div class="container">
    <div class="vacancy-menu">
      <div class="item active">
        All
      </div>
      <?php if(have_rows('vacancies')) : while(have_rows('vacancies')) : the_row(); ?>
      <div class="item">
        <?php the_sub_field('place_name'); ?>
      </div>
      <?php endwhile; endif; ?>
    </div>
    <div class="vacancy-wrap">
      <?php if(have_rows('vacancies')) : while(have_rows('vacancies')) : the_row(); 
        $vac_place = get_sub_field('place_name');
      ?>
      <div class="wrapper">
        <?php if(have_rows('vacancies_in_place')) : while(have_rows('vacancies_in_place')) : the_row(); ?>
        <div class="item">
          <div class="item-title">
            <b><?php the_sub_field('name'); ?></b>
            <adress>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.99594 3.25 4.75 6.49594 4.75 10.5C4.75 11.4073 5.17155 12.5709 5.90354 13.871C6.6242 15.151 7.59493 16.4758 8.58078 17.6823C9.56431 18.886 10.5499 19.9563 11.2906 20.7264C11.5656 21.0124 11.8063 21.2564 12 21.4499C12.1937 21.2564 12.4344 21.0124 12.7094 20.7264C13.4501 19.9563 14.4357 18.886 15.4192 17.6823C16.4051 16.4758 17.3758 15.151 18.0965 13.871C18.8284 12.5709 19.25 11.4073 19.25 10.5C19.25 6.49594 16.0041 3.25 12 3.25ZM12 22.5C11.4841 23.0444 11.484 23.0443 11.4838 23.0441L11.477 23.0377L11.4586 23.0201L11.389 22.9532C11.3286 22.8948 11.2408 22.8093 11.1294 22.6993C10.9066 22.4794 10.5895 22.1614 10.2094 21.7662C9.45014 20.9767 8.43569 19.8754 7.41922 18.6314C6.40507 17.3902 5.3758 15.9911 4.59646 14.6069C3.82845 13.2428 3.25 11.8018 3.25 10.5C3.25 5.66751 7.16751 1.75 12 1.75C16.8325 1.75 20.75 5.66751 20.75 10.5C20.75 11.8018 20.1716 13.2428 19.4035 14.6069C18.6242 15.9911 17.5949 17.3902 16.5808 18.6314C15.5643 19.8754 14.5499 20.9767 13.7906 21.7662C13.4105 22.1614 13.0934 22.4794 12.8706 22.6993C12.7592 22.8093 12.6714 22.8948 12.611 22.9532L12.5414 23.0201L12.523 23.0377L12.518 23.0424L12.5166 23.0437C12.5164 23.0439 12.5159 23.0444 12 22.5ZM12 22.5L12.5166 23.0437L12 23.5333L11.4838 23.0441L12 22.5Z" fill="#FE7300"/>
                  <path d="M12 11.5C12.5523 11.5 13 11.0523 13 10.5C13 9.94772 12.5523 9.5 12 9.5C11.4477 9.5 11 9.94772 11 10.5C11 11.0523 11.4477 11.5 12 11.5Z" fill="#FE7300"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 10.25C11.8619 10.25 11.75 10.3619 11.75 10.5C11.75 10.6381 11.8619 10.75 12 10.75C12.1381 10.75 12.25 10.6381 12.25 10.5C12.25 10.3619 12.1381 10.25 12 10.25ZM10.25 10.5C10.25 9.5335 11.0335 8.75 12 8.75C12.9665 8.75 13.75 9.5335 13.75 10.5C13.75 11.4665 12.9665 12.25 12 12.25C11.0335 12.25 10.25 11.4665 10.25 10.5Z" fill="#FE7300"/>
                </svg>
              </div>
              <span><?php echo $vac_place; ?></span>
            </adress>
          </div>
          <div class="content">
            <?php the_sub_field('content') ?>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="career-banner">
  <div class="banner-img">
    <img src="<?php the_field('bg_image'); ?>" alt="background">
  </div>
  <div class="question container wow animate__animated animate__fadeInUp">
    <div class="question-wrap ">
      <div class="left">
        <b>Contact us</b>
        <p>We're here to help and answer any question you might have</p>
      </div>
      <div class="right">
        <?php echo do_shortcode('[contact-form-7 id="4a616eb" title="Got a question"]'); ?>
      </div>
    </div>
  </div>
</section>


<!--Microdata organisation-->
<div itemscope itemtype="http://schema.org/Organization">
  <meta itemprop="name" content="Elate Moving | Professional Moving Services">
	<!-- <meta itemprop="priceRange" content="от 60 000 ₽"> -->
	<meta itemprop="description" content="Elate Moving is a professional moving and storage company with the most trustworthy, dedicated, expert and white glove NYC movers.">
  <meta itemprop="telephone" content="<?php the_field('phone', 'options'); ?>">
	<meta itemprop="email" content="<?php the_field('email', 'options'); ?>">
  <link itemprop="url" href="<?php echo get_permalink(); ?>">
	<link itemprop="logo image" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
  <time itemprop="openingHours" datetime="Mo-Fr 09:00−18:00"></time>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <meta itemprop="addressCountry" content="US">
    <meta itemprop="addressLocality" content="New York">
    <meta itemprop="streetAddress" content="305 Broadway Floor 7 New York, NY 10007">
  </div>
</div>

<?php
get_footer();
