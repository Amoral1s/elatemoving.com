
<footer class="footer">
  <div class="container footer-wrap">
    <div class="footer-left">
      <?php if (is_home()) : ?>
      <div  class="footer-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="elatemoving.com">
      </div>
      <?php else : ?>
      <a href="/" class="footer-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="elatemoving.com">
      </a>
      <?php endif; ?> 
      <div class="footer-contacts">
        <a class="phone" href="tel:<?php the_field('phone', 'options'); ?>">
          <?php the_field('phone', 'options'); ?>          
        </a> 
        <a class="email" href="mailto:<?php the_field('email', 'options'); ?>">
          <?php the_field('email', 'options'); ?>         
        </a> 
      </div>
      <div class="footer-social"> 
        <a target="blank" href="<?php the_field('facebook_link', 'options'); ?>"> 
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/fb.svg" alt="social-icon"> Facebook
        </a> 
        <a target="blank" href="<?php the_field('instagram_link', 'options'); ?>"> 
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/inst.svg" alt="social-icon"> Instagram
        </a> 
      </div> 
    </div>
    <div itemscope itemtype="http://schema.org/SiteNavigationElement" class="footer-menu mob-hidden">
      <b>Services</b>
      <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
      <?php  
        wp_nav_menu( array(
          'menu_class' => '',
          'theme_location' => 'menu-3',
          'container' => null,
          'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
        )); 
      ?>
      </ul>
      <b>Company</b>
      <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
      <?php  
        wp_nav_menu( array(
          'menu_class' => '',
          'theme_location' => 'menu-4',
          'container' => null,
          'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
        )); 
      ?>
      </ul>
    </div>
    <div itemscope itemtype="http://schema.org/SiteNavigationElement" class="footer-menu mob-hidden">
      <b>Locations</b>
      <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
      <?php  
        wp_nav_menu( array(
          'menu_class' => '',
          'theme_location' => 'menu-5',
          'container' => null,
          'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
        )); 
      ?>
      </ul>
    </div>
    <div itemscope itemtype="http://schema.org/SiteNavigationElement" class="footer-menu">
      <div class="google">
        <img src="<?php echo get_template_directory_uri(); ?>/img/google.svg" alt="Google.com">
      </div>
      <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
      <?php  
        wp_nav_menu( array(
          'menu_class' => '',
          'theme_location' => 'menu-2',
          'container' => null,
          'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
        )); 
      ?>
      </ul>
      <a href="<?php the_permalink(3); ?>" class="privacy">
        Privacy Policy
      </a>
      <div class="copyright">
        Elate Moving <span id="year">2023</span>
      </div>
      <script>
        document.getElementById('year').textContent = new Date().getFullYear();
      </script>
    </div>
  </div>
</footer>

<div class="overlay"></div>

<div class="popup popup-search">
  <div class="close">
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5677 15.5676C16.2999 14.8353 17.4871 14.8353 18.2193 15.5676L30.0001 27.3483L41.7809 15.5676C42.5131 14.8353 43.7003 14.8353 44.4325 15.5676C45.1648 16.2998 45.1648 17.487 44.4325 18.2192L32.6518 30L44.4325 41.7808C45.1648 42.513 45.1648 43.7002 44.4325 44.4324C43.7003 45.1647 42.5131 45.1647 41.7809 44.4324L30.0001 32.6517L18.2193 44.4324C17.4871 45.1647 16.2999 45.1647 15.5677 44.4324C14.8354 43.7002 14.8354 42.513 15.5677 41.7808L27.3485 30L15.5677 18.2192C14.8354 17.487 14.8354 16.2998 15.5677 15.5676Z" fill="white"/>
    </svg>
  </div>
  <div class="search">
    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
  </div>
</div>

<div class="popup popup-video">
  <div class="close"></div>
  <iframe width="860" height="515" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<div class="popup review">
  <div class="close">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22707 6.22715C6.51996 5.93426 6.99484 5.93426 7.28773 6.22715L12 10.9395L16.7124 6.22715C17.0052 5.93426 17.4801 5.93426 17.773 6.22715C18.0659 6.52004 18.0659 6.99492 17.773 7.28781L13.0607 12.0001L17.773 16.7124C18.0659 17.0053 18.0659 17.4802 17.773 17.7731C17.4801 18.066 17.0052 18.066 16.7124 17.7731L12 13.0608L7.28773 17.7731C6.99484 18.066 6.51996 18.066 6.22707 17.7731C5.93418 17.4802 5.93418 17.0053 6.22707 16.7124L10.9394 12.0001L6.22707 7.28781C5.93418 6.99492 5.93418 6.52004 6.22707 6.22715Z" fill="white"/>
    </svg>
  </div>
  <b>Write a review</b>
  <p>Your opinion is very important to us</p>
  <div class="form-stars">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/star.svg" alt="star">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/star.svg" alt="star">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/star.svg" alt="star">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/star.svg" alt="star">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/star.svg" alt="star">
  </div>
  <?php echo do_shortcode('[contact-form-7 id="1f84cea" title="Write a review"]'); ?>
</div>


<div class="popup thx" id="thx">
  <div class="close">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22707 6.22715C6.51996 5.93426 6.99484 5.93426 7.28773 6.22715L12 10.9395L16.7124 6.22715C17.0052 5.93426 17.4801 5.93426 17.773 6.22715C18.0659 6.52004 18.0659 6.99492 17.773 7.28781L13.0607 12.0001L17.773 16.7124C18.0659 17.0053 18.0659 17.4802 17.773 17.7731C17.4801 18.066 17.0052 18.066 16.7124 17.7731L12 13.0608L7.28773 17.7731C6.99484 18.066 6.51996 18.066 6.22707 17.7731C5.93418 17.4802 5.93418 17.0053 6.22707 16.7124L10.9394 12.0001L6.22707 7.28781C5.93418 6.99492 5.93418 6.52004 6.22707 6.22715Z" fill="white"/>
    </svg>
  </div>
  <div class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
      <g clip-path="url(#clip0_322_9870)">
      <path d="M63.4766 41.9929L54.6229 9.29217C53.5512 5.39151 49.5205 3.09811 45.62 4.16981C41.7194 5.24151 39.426 9.27225 40.4977 13.1727L47.2656 38.6726" stroke="white" stroke-width="7.81264" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M50.1952 44.1415C46.9627 35.6987 38.4715 29.8834 28.9057 29.8834C20.8117 29.8834 13.448 34.2397 9.49427 40.6785C7.36611 44.1186 8.42941 48.6325 11.8695 50.7607C15.3096 52.8889 19.8236 51.8256 21.9517 48.3855C23.3113 46.052 26.0936 44.5319 28.994 44.5319C33.3236 44.5319 36.7186 48.0366 36.7186 52.3445C36.7186 56.6524 33.3236 60.1572 28.994 60.1572C24.757 60.1572 23.0049 56.6598 20.2622 54.4198C16.0475 50.9775 11.9658 50.8953 8.72316 54.2979C5.48053 57.7003 6.02175 61.7199 8.3296 65.7313C9.47064 67.663 21.2115 79.6421 29.4278 87.9635C31.9716 90.5397 35.0018 92.5849 38.3424 93.9806C41.683 95.3763 45.2675 96.0947 48.8879 96.0939L58.7893 96.0922M93.5553 72.6545V21.9692C93.5659 17.924 89.9961 14.6362 85.9509 14.6257C81.9057 14.6152 78.5265 17.8857 78.516 21.9309V41.993L75.7109 13.2032C75.6175 9.1592 72.2635 5.9566 68.2195 6.04996C64.1755 6.14333 60.9729 9.49729 61.0663 13.5413L63.8673 44.1415" stroke="white" stroke-width="7.81264" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M73.8224 96.0914C80.886 96.0914 87.2019 92.3417 90.6321 86.7242" stroke="#FE7300" stroke-width="7.81264" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      </g>
      <defs>
      <clipPath id="clip0_322_9870">
      <rect width="100" height="100" fill="white"/>
      </clipPath>
      </defs>
    </svg>
  </div>
  <b>Thank You!</b>
  <p>We have received your application and will contact you as soon as possible</p>
</div>

<div class="popup thx" id="thx-sub">
  <div class="close">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22707 6.22715C6.51996 5.93426 6.99484 5.93426 7.28773 6.22715L12 10.9395L16.7124 6.22715C17.0052 5.93426 17.4801 5.93426 17.773 6.22715C18.0659 6.52004 18.0659 6.99492 17.773 7.28781L13.0607 12.0001L17.773 16.7124C18.0659 17.0053 18.0659 17.4802 17.773 17.7731C17.4801 18.066 17.0052 18.066 16.7124 17.7731L12 13.0608L7.28773 17.7731C6.99484 18.066 6.51996 18.066 6.22707 17.7731C5.93418 17.4802 5.93418 17.0053 6.22707 16.7124L10.9394 12.0001L6.22707 7.28781C5.93418 6.99492 5.93418 6.52004 6.22707 6.22715Z" fill="white"/>
    </svg>
  </div>
  <div class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
      <path d="M80.4688 85.1562H19.5312C10.9018 85.1562 3.90625 78.1607 3.90625 69.5312V30.4688C3.90625 21.8393 10.9018 14.8438 19.5312 14.8438H80.4688C89.0982 14.8438 96.0938 21.8393 96.0938 30.4688V69.5312C96.0938 78.1607 89.0982 85.1562 80.4688 85.1562Z" stroke="white" stroke-width="7.8125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M19.5312 30.4688L44.4758 56.1945C47.5268 59.2455 52.4734 59.2455 55.5244 56.1945L80.4688 30.4688M19.5312 69.5312L38.2812 50M61.7188 50L80.4688 69.5312" stroke="#FE7300" stroke-width="7.8125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
  <b>Thanks for subscribing!</b>
  <p>Stay up to date with our updates</p>
</div>

<?php wp_footer(); ?>



</body>
</html>
