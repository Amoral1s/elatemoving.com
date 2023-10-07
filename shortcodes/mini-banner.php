<div class="mini-banner">
  <div class="left">
    <b>
      <?php if (get_field('banner_icon')) { ?>
      <div class="icon">
        <img src="<?php the_field('banner_icon'); ?>" alt="icon">
      </div>
      <?php } ?>
      <?php the_field('banner_title'); ?>
    </b>
    <p>
      <?php the_field('banner_text'); ?>
    </p>
  </div>
  <div class="right">
    <div class="right-contacts">
      <?php if (get_field('banner_phone')) { ?>
      <a class="phone" href="tel:<?php the_field('banner_phone'); ?>"><?php the_field('banner_phone'); ?></a>
      <?php } ?>
      <?php if (get_field('banner_email')) { ?>
      <a class="email" href="mailto:<?php the_field('banner_email'); ?>"><?php the_field('banner_email'); ?></a>
      <?php } ?>
    </div>
    <a href="<?php the_permalink(79); ?>" class="quote button button-accent">Get a quote</a>
  </div>
</div>