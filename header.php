<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/header.min.css" />
  <?php if (is_home()) { ?>
    <link rel="preload" as="image" href="<?php the_field('offer_img', 'options'); ?>" />
  <?php } ?>
  <meta charset="UTF-8">
  <meta name="viewport" id="myViewport" content="width=device-width, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" sizes="any"><!-- 32×32 -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/icon.jpg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png"><!-- 180×180 -->
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.webmanifest">
  
  <?php wp_head(); ?>
</head>

<body id="top">

<header itemscope itemtype="http://schema.org/WPHeader" class="header"> 
  <div class="container"> 
    <div class="header-wrap"> 
      <?php if (is_home()) : ?>
      <div  class="header-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="elatemoving.com">
      </div>
      <?php else : ?>
      <a href="/" class="header-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="elatemoving.com">
      </a>
      <?php endif; ?> 
      <nav class="header-menu" itemscope itemtype="http://schema.org/SiteNavigationElement" style="display: none"> 
        <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
        <?php  
          wp_nav_menu( array(
            'menu_class' => '',
            'theme_location' => 'menu-1',
            'container' => null,
            'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
          )); 
        ?>
        </ul>
      </nav> 
      <div class="header-right" style="display: none"> 
        <div class="header-contacts"> 
          <a class="phone" href="tel:<?php the_field('phone', 'options'); ?>">
            <?php the_field('phone', 'options'); ?>          
          </a> 
          <a class="email" href="mailto:<?php the_field('email', 'options'); ?>">
            <?php the_field('email', 'options'); ?>         
          </a> 
        </div> 
        <div class="social"> 
          <a target="blank" href="<?php the_field('facebook_link', 'options'); ?>"> 
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/fb.svg" alt="social-icon"> 
          </a> 
          <a target="blank" href="<?php the_field('instagram_link', 'options'); ?>"> 
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/inst.svg" alt="social-icon"> 
          </a> 
          <div class="search-toggle"> 
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/search.svg" alt="search-icon"> 
          </div> 
        </div> 
        <div class="callback"> 
          <a href="<?php the_permalink(79); ?>" class="button button-accent">
            Quote
          </a> 
        </div> 
      </div> 
      <div class="burger">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 5C2.25 4.58579 2.58579 4.25 3 4.25H21C21.4142 4.25 21.75 4.58579 21.75 5C21.75 5.41421 21.4142 5.75 21 5.75H3C2.58579 5.75 2.25 5.41421 2.25 5Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 12C2.25 11.5858 2.58579 11.25 3 11.25H21C21.4142 11.25 21.75 11.5858 21.75 12C21.75 12.4142 21.4142 12.75 21 12.75H3C2.58579 12.75 2.25 12.4142 2.25 12Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 19C2.25 18.5858 2.58579 18.25 3 18.25H21C21.4142 18.25 21.75 18.5858 21.75 19C21.75 19.4142 21.4142 19.75 21 19.75H3C2.58579 19.75 2.25 19.4142 2.25 19Z" fill="white"/>
        </svg>
      </div>
    </div> 
    <div class="mobile-menu" style="display: none">
      <div class="top">
        <?php if (is_home()) : ?>
        <div  class="header-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="elatemoving.com">
        </div>
        <?php else : ?>
        <a href="/" class="header-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="elatemoving.com">
        </a>
        <?php endif; ?>
        <div class="close">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22704 6.22703C6.51993 5.93414 6.99481 5.93414 7.2877 6.22703L12 10.9393L16.7123 6.22703C17.0052 5.93414 17.4801 5.93414 17.773 6.22703C18.0659 6.51992 18.0659 6.9948 17.773 7.28769L13.0607 12L17.773 16.7123C18.0659 17.0052 18.0659 17.4801 17.773 17.773C17.4801 18.0659 17.0052 18.0659 16.7123 17.773L12 13.0607L7.2877 17.773C6.99481 18.0659 6.51993 18.0659 6.22704 17.773C5.93415 17.4801 5.93415 17.0052 6.22704 16.7123L10.9394 12L6.22704 7.28769C5.93415 6.9948 5.93415 6.51992 6.22704 6.22703Z" fill="white"/>
          </svg>
        </div>
      </div> 
      <div class="search">
        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
      </div>
      <nav itemscope itemtype="http://schema.org/SiteNavigationElement">
        <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
          <?php  
            wp_nav_menu( array(
              'menu_class' => '',
              'theme_location' => 'menu-1',
              'container' => null,
              'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
            )); 
          ?>
        </ul>
      </nav>
      <a class="phone" href="tel:<?php the_field('phone', 'options'); ?>">
        <?php the_field('phone', 'options'); ?>          
      </a> 
      <a class="email" href="mailto:<?php the_field('email', 'options'); ?>">
        <?php the_field('email', 'options'); ?>         
      </a> 
      <div class="social">
        <a target="blank" href="<?php the_field('facebook_link', 'options'); ?>"> 
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/fb.svg" alt="social-icon"> Facebook
        </a>
        <a target="blank" href="<?php the_field('instagram_link', 'options'); ?>"> 
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/inst.svg" alt="social-icon"> Instagram
        </a>
      </div>
    </div>
  </div> 
</header>






	