<?php
/**
 Template Name:  Investors
*/

get_header();
?>

<section class="investor page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title title-sub"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>
    <div class="investor-img">
      <img src="<?php the_field('image'); ?>" alt="Investor relation">
    </div>
    <div class="investor-form">
      <div class="question">
        <div class="question-wrap">
          <div class="left">
            <b>How can we help you?</b>
            <p>Submit questions or comments to Investor Relations below:</p>
          </div>
          <div class="right">
            <?php echo do_shortcode('[contact-form-7 id="4a616eb" title="Got a question"]'); ?>
          </div>
        </div>
      </div>
      <div class="investor-form-rows">
        <?php if(have_rows('contacts_row')) : while(have_rows('contacts_row')) : the_row(); ?>
        <div class="item">
          <b><?php the_sub_field('title'); ?></b>
          <p><?php the_sub_field('adress'); ?></p>
          <a href="tel:<?php the_sub_field('phone_'); ?>" target="blank">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.06367 1.25L7.81459 1.25C8.12696 1.25 8.40662 1.44361 8.51659 1.73599L9.97202 5.60588C10.0202 5.73398 10.0324 5.87281 10.0073 6.00735L9.27804 9.91931C10.1744 12.0273 11.655 13.4439 14.1107 14.7146L17.9756 13.9657C18.1128 13.9391 18.2548 13.9514 18.3854 14.0012L22.2671 15.4804C22.5579 15.5912 22.7501 15.87 22.7501 16.1812L22.7501 19.7655C22.7501 21.391 21.3179 22.7101 19.6426 22.3456C16.589 21.6811 10.9317 19.9923 6.96974 16.0303C3.17461 12.2352 1.90306 6.99252 1.47503 4.15869C1.23079 2.54172 2.5276 1.25 4.06367 1.25ZM7.29537 2.75L4.06367 2.75C3.34465 2.75 2.86564 3.32183 2.9582 3.93467C3.37098 6.66748 4.5786 11.5179 8.0304 14.9697C11.6788 18.6181 16.9826 20.2317 19.9615 20.8799C20.6158 21.0222 21.2501 20.524 21.2501 19.7655L21.2501 16.698L18.0511 15.479L14.1428 16.2363C13.9801 16.2678 13.8117 16.2446 13.6636 16.1703C10.7694 14.7176 8.89045 12.9954 7.80372 10.2785C7.75093 10.1466 7.73673 10.0023 7.76278 9.86255L8.49439 5.9381L7.29537 2.75Z" fill="#FE7300"/>
              </svg>
            </div>
            <?php the_sub_field('phone_'); ?>
          </a>
        </div>
        <?php endwhile; endif; ?>
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
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <meta itemprop="addressCountry" content="US">
    <meta itemprop="addressLocality" content="New York">
    <meta itemprop="streetAddress" content="305 Broadway Floor 7 New York, NY 10007">
  </div>
</div>

<?php
get_footer();
