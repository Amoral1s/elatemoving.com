<div class="big-banner">
  <div class="left">
    <b>
      <?php if (get_field('banner_icon_big')) { ?>
      <div class="icon">
        <img src="<?php the_field('banner_icon_big'); ?>" alt="icon">
      </div>
      <?php } ?>
      <?php the_field('banner_title_big'); ?>
    </b>
    <p>
      <?php the_field('banner_text_big'); ?>
    </p>
    <a href="<?php the_permalink(79); ?>" class="quote button button-accent">Get a quote</a>
  </div>
  <div class="right">
    <img src="<?php echo get_template_directory_uri(); ?>/img/big-banner-man.png" alt="background">
  </div>
</div>