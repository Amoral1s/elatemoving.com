<?php
/**
 Template Name: Commercial moving
*/

get_header();
?>
<div class="bg-section land-section-bg">
  <section class="offer land-offer page-top">
    <div class="container">
      <div class="offer-wrap">
        <div class="offer-wrap-left">
          <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
          <h1><?php the_title(); ?></h1>
          <p>
            <?php the_field('offer_subtitle'); ?>
          </p>
          <div class="get-form">
            <div class="input line">
              <input type="text" class="input-from" placeholder="Moving from">
              <p>Moving from</p>
            </div>
            <div class="input">
              <input type="text" class="input-to" placeholder="Moving to">
              <p>Moving to</p>
            </div>
            <a href="<?php the_permalink(79); ?>" class="button button-accent">
              Quote
            </a>
          </div>
        </div>
        <div class="offer-wrap-right">
        <img src="<?php the_field('offer_img'); ?>" style="min-height: 280px" alt="<?php the_field('offer_title'); ?>">
        </div>
        <div class="advantages-wrap-cards">
          <?php if(have_rows('advantages_cards', 'options')) : while(have_rows('advantages_cards', 'options')) : the_row(); ?>
          <div class="item">
            <div class="icon">
              <img src="<?php the_sub_field('icon'); ?>" alt="icon">
            </div>
            <b><?php the_sub_field('title'); ?></b>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="img-content">
    <div class="container">
      <?php if(have_rows('img_content')) : while(have_rows('img_content')) : the_row(); ?>
      <div class="wrap wow animate__animated animate__fadeInUp">
        <div class="left">
          <h2 class="title"><?php the_sub_field('title'); ?></h2>
          <div class="content">
            <?php the_sub_field('content'); ?>
          </div>
        </div>
        <div class="right">
          <img src="<?php the_sub_field('image'); ?>" alt="Content image">
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </section>

</div>

<section class="advantages wow animate__animated animate__fadeInUp">
  <div class="container">
    <div class="advantages-wrap ">
      <h2 class="title wow animate__animated animate__fadeInUp title-reverse">
        <?php the_field('advantages_title'); ?>
      </h2>
      <div class="advantages-wrap-img ">
        <img src="<?php the_field('advantages_image', 'options'); ?>" alt="truck">
      </div>
      <div class="advantages-wrap-cards commercial">
        <?php if(have_rows('advantages_cards')) : while(have_rows('advantages_cards')) : the_row(); ?>
        <div class="item">
          <div class="icon">
            <img src="<?php the_sub_field('icon'); ?>" alt="icon">
          </div>
          <div class="wrapper">
            <b><?php the_sub_field('title'); ?></b>
            <p><?php the_sub_field('text'); ?></p>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="about-us land-video wow animate__animated animate__fadeInUp">
  <div class="about-us-video">
    <img data-video="<?php the_field('about_youtube_link'); ?>" class="play" src="<?php the_field('youtube_video_placeholder_image'); ?>" alt="placholder">
    <iframe width="100%" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</section>

<section class="four-steps wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title title-reverse">
      <?php the_field('step_title'); ?>
    </h2>
    <div class="four-steps-wrap">
      <?php $num = 1; if (have_rows('steps')) : while(have_rows('steps')) : the_row(); ?>
      <div class="item">
        <div class="num"><?php echo $num; $num++; ?></div>
        <div class="wrapper">
        <b><?php the_sub_field('name'); ?></b>
          <?php if (get_sub_field('you_need_button_in_this_card')) { ?> 
            <a href="<?php the_permalink(79); ?>" class="button button-accent">Get a quote</a>
          <?php } ?>
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

<section class="team wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title  title-reverse">
      <?php the_field('team_title', 'options'); ?>
    </h2>
    <p class="subtitle"><?php the_field('team_subtitle', 'options'); ?></p>
    <div class="team-wrap swiper-nav">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5303 5.46967C15.8232 5.76256 15.8232 6.23744 15.5303 6.53033L10.0607 12L15.5303 17.4697C15.8232 17.7626 15.8232 18.2374 15.5303 18.5303C15.2374 18.8232 14.7626 18.8232 14.4697 18.5303L8.46967 12.5303C8.17678 12.2374 8.17678 11.7626 8.46967 11.4697L14.4697 5.46967C14.7626 5.17678 15.2374 5.17678 15.5303 5.46967Z" fill="white"/>
        </svg>
      </div>
      <div class="team-slider swiper ">
        <div class="swiper-wrapper">
          <?php if(have_rows('team', 'options')) : while(have_rows('team', 'options')) : the_row(); ?>
          <div class="team-slider-item swiper-slide">
            <div class="img">
              <img src="<?php the_sub_field('photo'); ?>" alt="<?php the_sub_field('name'); ?>">
            </div>
            <b><?php the_sub_field('name'); ?></b>
            <p><?php the_sub_field('position'); ?></p>
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
      Read more
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

<?php if (get_field('dest_title')) { ?>
<section class="destination wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title "><?php the_field('dest_title'); ?></h2>
    <div class="destination-wrap ">
    <?php if(have_rows('destinations')) : while(have_rows('destinations')) : the_row(); ?>
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
<?php } ?>

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
