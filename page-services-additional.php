<?php
/**
 Template Name: Service - additional
*/

get_header();
?>
<section itemscope itemtype="https://schema.org/Service" class="service service-city page-top">
<?php $my_descr = get_post_meta($post->ID, "_yoast_wpseo_metadesc", true); ?>
	<meta itemprop="description" content="<?php echo $my_descr; ?>">
	<div itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
      <meta itemprop="priceCurrency" content="USD">
      <link itemprop="availability" href="http://schema.org/InStock">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <div class="service-offer">
      <div class="left">
        <h1 class="page-title title-sub"><?php the_title(); ?></h1>
        <p class="subtitle"><?php the_field('subtitle'); ?></p>
        <div class="btns">
          <a href="<?php the_permalink(79); ?>" class="button button-accent">Qoute</a>
          <a href="<?php the_permalink(203); ?>" class="button">Contact us</a>
        </div>
        <div class="service-offer-features">
          <?php if(have_rows('offer_features')) : while(have_rows('offer_features')) : the_row(); ?>
          <div class="item">
            <div class="icon">
              <img src="<?php the_sub_field('icon'); ?>" alt="icon">
            </div>
            <p><?php the_sub_field('title'); ?></p>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="right">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
      </div>
    </div>
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

<section class="choose wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title title-sub"><?php the_field('choose_title', 'options'); ?></h2>
    <p class="subtitle"><?php the_field('choose_subtitle', 'options'); ?></p>
    <div class="choose-wrap">
      <?php if(have_rows('choose_cards', 'options')) : while(have_rows('choose_cards', 'options')) : the_row(); ?>
      <div class="item">
        <div class="icon"><img src="<?php the_sub_field('icon'); ?>" alt="icon"></div>
        <div class="text">
          <b><?php the_sub_field('title'); ?></b>
          <p><?php the_sub_field('text'); ?></p>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="get container wow animate__animated animate__fadeInUp">
  <div class="get-wrap">
    <b>Get a quote</b>
    <p>Please provide us details for your move. Its free and takes only 30 seconds</p>
    <div class="get-form">
      <div class="input">
        <input type="text" class="input-from" placeholder="Moving from">
        <p>Moving from</p>
      </div>
      <div class="input">
        <input type="text" class="input-to" placeholder="Moving to">
        <p>Moving to</p>
      </div>
      <a href="<?php the_permalink(79); ?>" class="button">
        Quote
      </a>
    </div>
  </div>
</section>

<section class="content-section wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title"><?php the_field('content_title'); ?></h2>
    <div class="content">
      <?php the_field('content_content'); ?>
    </div>
  </div>
</section>

<?php if (get_field('ben_title')) { ?>
<section class="benefits container wow animate__animated animate__fadeInUp">
  <div class="benefits-wrap">
    <div class="left">
      <h2 class="title">
        <?php the_field('ben_title'); ?>
      </h2>
      <div class="content">
        <?php the_field('ben_text'); ?>
      </div>
      <a href="<?php the_permalink(79); ?>" class="button button-accent">Get a quote</a>
    </div>
    <div class="right">
      <img src="<?php the_field('ben_img'); ?>" alt="<?php the_field('ben_title'); ?>">
    </div>
  </div>
</section>
<?php } ?>

<section class="add-services wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title">Other services</h2>
    <div class="add-services-wrap">
      <?php if(have_rows('additional_services', 480)) : while(have_rows('additional_services', 480)) : the_row(); ?>
      <a href="<?php the_sub_field('link'); ?>" class="item">
        <div class="icon"><img src="<?php the_sub_field('icon'); ?>" alt="icon"></div>
        <p><?php the_sub_field('title'); ?></p>
      </a>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="reviews wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title ">
      <?php the_field('reviews_title', 'options'); ?>
    </h2>
    <div class="swiper-nav reviews-main">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5303 5.46967C15.8232 5.76256 15.8232 6.23744 15.5303 6.53033L10.0607 12L15.5303 17.4697C15.8232 17.7626 15.8232 18.2374 15.5303 18.5303C15.2374 18.8232 14.7626 18.8232 14.4697 18.5303L8.46967 12.5303C8.17678 12.2374 8.17678 11.7626 8.46967 11.4697L14.4697 5.46967C14.7626 5.17678 15.2374 5.17678 15.5303 5.46967Z" fill="white"/>
        </svg>
      </div>
      <div class="reviews-wrap swiper wow animate__animated animate__fadeInUp">
        <div class="swiper-wrapper reviews-slider">
          <?php if(have_rows('reviews_slider', 'options')) : while(have_rows('reviews_slider', 'options')) : the_row(); ?>
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

<section class="blog wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title title-reverse ">
      Our blog
    </h2>
    <div class="blog-slider swiper ">
      <div class="blog-wrap swiper-wrapper">
        <?php 
          $my_posts = get_posts('numberposts=4');
          foreach ($my_posts as $post) :
          setup_postdata($post);
        ?>
        <a href="<?php the_permalink(); ?>" class="blog-wrap-item swiper-slide">
          <img src="<?php the_post_thumbnail_url() ?>" alt="post thumbnail">
          <div class="date"><?php echo get_the_date('d.m.Y') ?></div>
          <b><?php the_title(); ?></b>
        </a>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>

<section class="destination wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title "><?php the_field('dest_title', 'options'); ?></h2>
    <div class="destination-wrap ">
    <?php if(have_rows('destinations', 'options')) : while(have_rows('destinations', 'options')) : the_row(); ?>
    <ul>
      <?php if(have_rows('columns')) : while(have_rows('columns')) : the_row(); ?>
      <li>
        <?php if (get_sub_field('link')) { ?>
        <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('name'); ?></a>
        <?php } else { ?>
        <div><?php the_sub_field('name'); ?></div>
        <?php } ?>
      </li>
      <?php endwhile; endif; ?>
    </ul>
    <?php endwhile; endif; ?>

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

<?php
get_footer();
