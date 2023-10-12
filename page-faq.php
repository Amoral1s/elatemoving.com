<?php
/**
 Template Name:  FAQ
*/

get_header();
?>

<section class="faq page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title title-sub"><?php the_title(); ?></h1>
    <div class="faq-row">
      <p class="subtitle"><?php the_field('subtitle'); ?></p>
      <a href="#question-form" class="button button-accent anchor">
        Ask a question
      </a>
    </div>
    <div itemscope itemtype="https://schema.org/FAQPage" class="faq-costs">
      <?php if(have_rows('faq')) : while(have_rows('faq')) : the_row(); ?>
      <div class="wrapper">
        <h2  class="title"><?php the_sub_field('title'); ?></h2>
        <?php if(have_rows('questions')) : while(have_rows('questions')) : the_row(); ?>
        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="item">
          <b itemprop="name" class="faq-toggle"><?php the_sub_field('q_title'); ?></b>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="content"><span  itemprop="text" ><?php the_sub_field('q_content'); ?></span></div>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="question container wow animate__animated animate__fadeInUp" id="question-form">
  <div class="question-wrap">
    <div class="left">
      <b>Got a question?</b>
      <p>We're here to help and answer any question you might have</p>
    </div>
    <div class="right">
      <?php echo do_shortcode('[contact-form-7 id="4a616eb" title="Got a question"]'); ?>
    </div>
  </div>
</section>

<section class="advantages wow animate__animated animate__fadeInUp">
  <div class="container">
    <div class="advantages-wrap">
      <h2 class="title wow animate__animated animate__fadeInUp title-reverse">
        <?php the_field('advantages_title', 'options'); ?>
      </h2>
      <div class="advantages-wrap-img ">
        <img src="<?php the_field('advantages_image', 'options'); ?>" alt="truck">
      </div>
      <div class="advantages-wrap-cards ">
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


<?php
get_footer();
