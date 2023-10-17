<?php
/**
 Template Name: All services
*/

get_header();
?>
<section itemscope itemtype="https://schema.org/Service" class="all-services page-top">
<?php $my_descr = get_post_meta($post->ID, "_yoast_wpseo_metadesc", true); ?>
	<meta itemprop="description" content="<?php echo $my_descr; ?>">
	<div itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
      <meta itemprop="priceCurrency" content="USD">
      <link itemprop="availability" href="http://schema.org/InStock">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title title-sub"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>
    <div class="offer-wrap-cards" style="margin-top: 0">
      <?php if(have_rows('offer_cards', 'options')) : while(have_rows('offer_cards', 'options')) : the_row(); ?>
      <a href="<?php the_sub_field('link', 'options'); ?>" class="offer-wrap-cards-item">
        <b><?php the_sub_field('name', 'options'); ?></b>
        <p><?php the_sub_field('text', 'options'); ?></p>
      </a>
      <?php endwhile; endif; ?>
    </div>
    <div class="services-tabs">
      <div class="tabs-title">
        <div class="item active">
          Types of transportation
        </div>
        <div class="item">
          Object of transportation
        </div>
      </div>
      <div class="tabs-wrapper">
        <div class="wrap active">
          <?php if(have_rows('types_of_transportation')) : while(have_rows('types_of_transportation')) : the_row(); ?>
          <a href="<?php the_sub_field('link'); ?>" class="item">
            <div class="icon"><img src="<?php the_sub_field('icon'); ?>" alt="icon"></div>
            <p  itemprop="name"><?php the_sub_field('title'); ?></p>
          </a>
          <?php endwhile; endif; ?>
        </div>
        <div class="wrap">
          <?php if(have_rows('object_of_transportation')) : while(have_rows('object_of_transportation')) : the_row(); ?>
          <a href="<?php the_sub_field('link'); ?>" class="item">
            <div class="icon"><img src="<?php the_sub_field('icon'); ?>" alt="icon"></div>
            <p  itemprop="name"><?php the_sub_field('title'); ?></p>
          </a>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="add-services page-add-services">
  <div class="container">
    <h2 class="title"><?php the_field('add_services_title', 480); ?></h2>
    <div class="add-services-wrap">
      <?php if(have_rows('additional_services',480)) : while(have_rows('additional_services',480)) : the_row(); ?>
      <a href="<?php the_sub_field('link'); ?>" class="item">
        <div class="icon"><img src="<?php the_sub_field('icon'); ?>" alt="icon"></div>
        <p><?php the_sub_field('title'); ?></p>
      </a>
      <?php endwhile; endif; ?>
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
get_footer();
