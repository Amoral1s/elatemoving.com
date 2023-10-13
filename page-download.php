<?php
/**
 Template Name:  Download custom forms
*/

get_header();
?>

<section class="download page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>
    <div class="download-cards">
      <?php if(have_rows('download_cards')) : while(have_rows('download_cards')) : the_row(); ?>
      <div class="card">
        <div class="card-title">
          <b><?php the_sub_field('title'); ?></b>
          <p><?php the_sub_field('text'); ?></p>
        </div>
        <div class="links">
          <?php if(have_rows('files')) : while(have_rows('files')) : the_row(); ?>
          <a href="<?php the_sub_field('file_link'); ?>" target="blank" download>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 20C5.25 19.5858 5.58579 19.25 6 19.25L18 19.25C18.4142 19.25 18.75 19.5858 18.75 20C18.75 20.4142 18.4142 20.75 18 20.75L6 20.75C5.58579 20.75 5.25 20.4142 5.25 20Z" fill="#FE7300"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4697 16.5303C11.7626 16.8232 12.2374 16.8232 12.5303 16.5303L16.0303 13.0303C16.3232 12.7374 16.3232 12.2626 16.0303 11.9697C15.7374 11.6768 15.2626 11.6768 14.9697 11.9697L12.75 14.1893V4C12.75 3.58579 12.4142 3.25 12 3.25C11.5858 3.25 11.25 3.58579 11.25 4V14.1893L9.03033 11.9697C8.73744 11.6768 8.26256 11.6768 7.96967 11.9697C7.67678 12.2626 7.67678 12.7374 7.96967 13.0303L11.4697 16.5303Z" fill="#FE7300"/>
              </svg>
            </div>
            <div class="name"><?php the_sub_field('file_name'); ?></div>
            <div class="format"><?php the_sub_field('file_format'); ?></div>
          </a>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <?php endwhile; endif; ?>

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
