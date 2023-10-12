<?php
/**
 Template Name:  Moving checklist
*/

get_header();
?>

<section class="checklist page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title "><?php the_title(); ?></h1>
    <div class="checklist-pdf">
      <a href="<?php the_field('pdf_file_link') ?>" target="blank" download>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4697 22.5303C11.7626 22.8232 12.2374 22.8232 12.5303 22.5303L16.0303 19.0303C16.3232 18.7374 16.3232 18.2626 16.0303 17.9697C15.7374 17.6768 15.2626 17.6768 14.9697 17.9697L12.75 20.1893V13C12.75 12.5858 12.4142 12.25 12 12.25C11.5858 12.25 11.25 12.5858 11.25 13V20.1893L9.03033 17.9697C8.73744 17.6768 8.26256 17.6768 7.96967 17.9697C7.67678 18.2626 7.67678 18.7374 7.96967 19.0303L11.4697 22.5303Z" fill="#FE7300"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.39312 4.63587C6.76553 5.68186 6.75 6.97236 6.75 8C6.75 8.41421 6.41421 8.75 6 8.75C5.28668 8.75 4.20002 8.97016 3.31323 9.60865C2.46468 10.2196 1.75 11.2444 1.75 13C1.75 14.1955 2.08156 15.0384 2.53739 15.6393C2.99923 16.2481 3.62419 16.6545 4.27355 16.9089C4.65923 17.06 4.84941 17.4951 4.69833 17.8808C4.54726 18.2665 4.11213 18.4567 3.72645 18.3056C2.88209 17.9748 2.00705 17.4221 1.34232 16.5458C0.67158 15.6616 0.25 14.4934 0.25 13C0.25 10.7556 1.20198 9.2804 2.43677 8.39135C3.35065 7.73336 4.39099 7.41468 5.25627 7.30083C5.28248 6.32248 5.41727 5.01348 6.10688 3.86413C7.02939 2.32662 8.81736 1.25 12 1.25C15.1826 1.25 16.9706 2.32662 17.8931 3.86413C18.5827 5.01348 18.7175 6.32248 18.7437 7.30083C19.609 7.41468 20.6493 7.73336 21.5632 8.39135C22.798 9.2804 23.75 10.7556 23.75 13C23.75 14.4934 23.3284 15.6616 22.6577 16.5458C21.993 17.4221 21.1179 17.9748 20.2736 18.3056C19.8879 18.4567 19.4527 18.2665 19.3017 17.8808C19.1506 17.4951 19.3408 17.06 19.7264 16.9089C20.3758 16.6545 21.0008 16.2481 21.4626 15.6393C21.9184 15.0384 22.25 14.1955 22.25 13C22.25 11.2444 21.5353 10.2196 20.6868 9.60865C19.8 8.97016 18.7133 8.75 18 8.75C17.5858 8.75 17.25 8.41421 17.25 8C17.25 6.97236 17.2345 5.68186 16.6069 4.63587C16.0294 3.67338 14.8174 2.75 12 2.75C9.18264 2.75 7.97061 3.67338 7.39312 4.63587Z" fill="#FE7300"/>
          </svg>
        </div>
        <span>Download PDF</span>
      </a>
      <p>
        <?php the_field('pdf_text') ?>
      </p>
    </div>
    <div class="checklist-wrap">
      <?php if(have_rows('checklists')) : while(have_rows('checklists')) : the_row(); ?>
      <div class="wrapper">
        <b><?php the_sub_field('title'); ?></b>
        <?php if(have_rows('items')) : while(have_rows('items')) : the_row(); ?>
        <div class="item">
          <p><?php the_sub_field('item_name'); ?></p>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="question container wow animate__animated animate__fadeInUp">
  <div class="question-wrap ">
    <div class="left">
      <b>Contact us</b>
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
