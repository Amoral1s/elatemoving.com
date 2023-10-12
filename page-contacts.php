<?php
/**
 Template Name: Contacs
*/

get_header();
?>

<section class="contacts">
  <div class="container page-top">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title"><?php the_title() ?></h1>
    <div class="contacts-row">
      <div class="contacts-row-left">
        <div class="item">
          <a class="phone" href="tel:<?php the_field('phone', 'options'); ?>">
            <?php the_field('phone', 'options'); ?>          
          </a> 
          <p><?php the_field('work_time'); ?></p>
        </div>
        <div class="item">
          <a class="email" href="mailto:<?php the_field('email', 'options'); ?>">
            <?php the_field('email', 'options'); ?>         
          </a> 
          <p>Customer Support Service</p>
        </div>
      </div>
      <div class="contacts-row-right">
        <a target="blank" href="<?php the_field('facebook_link', 'options'); ?>"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M16.1702 13.0624L16.6677 9.78629H13.5554V7.66124C13.5554 6.76474 13.9894 5.89037 15.3833 5.89037H16.7992V3.10124C16.7992 3.10124 15.5148 2.87988 14.2874 2.87988C11.7231 2.87988 10.0485 4.44932 10.0485 7.28936V9.78629H7.19922V13.0624H10.0485V20.9826C10.6206 21.0734 11.2058 21.1199 11.802 21.1199C12.3981 21.1199 12.9833 21.0734 13.5554 20.9826V13.0624H16.1702Z" fill="#FE7300"/>
          </svg>
            <span>Facebook</span>
        </a> 
        <a target="blank" href="<?php the_field('instagram_link', 'options'); ?>"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M21.5468 8.04202C21.5007 7.01977 21.3356 6.32033 21.1013 5.70928C20.8555 5.07901 20.529 4.54098 19.9951 4.01064C19.4613 3.48029 18.9274 3.14595 18.2975 2.90383C17.6868 2.66556 16.9878 2.50415 15.9662 2.45804C14.9407 2.41192 14.6142 2.40039 12.0102 2.40039C9.40231 2.40039 9.07584 2.41192 8.0542 2.45804C7.03255 2.50415 6.33353 2.66941 5.72285 2.90383C5.08912 3.14979 4.55142 3.47645 4.02139 4.01064C3.49137 4.54483 3.15722 5.07901 2.91525 5.70928C2.68096 6.32033 2.51581 7.01977 2.46972 8.04202C2.42363 9.06813 2.41211 9.39479 2.41211 12.0004C2.41211 14.6098 2.42363 14.9365 2.46972 15.9588C2.51581 16.981 2.68096 17.6805 2.91525 18.2915C3.16106 18.9218 3.48752 19.4598 4.02139 19.9901C4.55142 20.5243 5.08912 20.8548 5.71901 21.0969C6.32969 21.3352 7.02871 21.4966 8.05036 21.5427C9.07584 21.5889 9.40231 21.6004 12.0063 21.6004C14.6142 21.6004 14.9407 21.5889 15.9623 21.5427C16.984 21.4966 17.683 21.3314 18.2937 21.0969C18.9236 20.851 19.4613 20.5243 19.9913 19.9901C20.5213 19.456 20.8555 18.9218 21.0974 18.2915C21.3356 17.6805 21.4969 16.981 21.543 15.9588C21.5891 14.9327 21.6006 14.606 21.6006 12.0004C21.6006 9.39479 21.5929 9.06428 21.5468 8.04202ZM19.8223 15.8819C19.7801 16.8196 19.6226 17.3307 19.492 17.6651C19.3192 18.1109 19.1079 18.4337 18.7699 18.7719C18.432 19.1101 18.1132 19.3138 17.6638 19.4944C17.3258 19.6251 16.815 19.7826 15.8817 19.8249C14.8716 19.871 14.5681 19.8825 12.0025 19.8825C9.43687 19.8825 9.13345 19.871 8.12333 19.8249C7.18618 19.7826 6.67536 19.6251 6.34122 19.4944C5.89569 19.3214 5.57306 19.1101 5.23507 18.7719C4.89709 18.4337 4.69353 18.1147 4.51301 17.6651C4.38242 17.3269 4.22495 16.8158 4.1827 15.8819C4.13661 14.8712 4.12509 14.5676 4.12509 12.0004C4.12509 9.43322 4.13661 9.12961 4.1827 8.11889C4.22495 7.18118 4.38242 6.67005 4.51301 6.3357C4.68584 5.8899 4.89709 5.56708 5.23507 5.22889C5.57306 4.8907 5.89185 4.68702 6.34122 4.5064C6.6792 4.37573 7.19003 4.21816 8.12333 4.17589C9.13345 4.12977 9.43687 4.11825 12.0025 4.11825C14.5681 4.11825 14.8716 4.12977 15.8817 4.17589C16.8188 4.21816 17.3297 4.37573 17.6638 4.5064C18.1093 4.67933 18.432 4.8907 18.7699 5.22889C19.1079 5.56708 19.3115 5.88606 19.492 6.3357C19.6226 6.67389 19.7801 7.18502 19.8223 8.11889C19.8684 9.12961 19.8799 9.43322 19.8799 12.0004C19.8799 14.5676 19.8646 14.8712 19.8223 15.8819Z" fill="#FE7300"/>
              <path d="M12.0019 7.06543C9.27491 7.06543 7.07031 9.2752 7.07031 11.9999C7.07031 14.7285 9.27875 16.9344 12.0019 16.9344C14.725 16.9344 16.9334 14.7208 16.9334 11.9999C16.9334 9.27135 14.7288 7.06543 12.0019 7.06543ZM12.0019 15.2012C10.2351 15.2012 8.8025 13.7678 8.8025 11.9999C8.8025 10.2321 10.2351 8.79866 12.0019 8.79866C13.7686 8.79866 15.2012 10.2321 15.2012 11.9999C15.2012 13.7678 13.7686 15.2012 12.0019 15.2012Z" fill="#FE7300"/>
              <path d="M17.1268 8.02655C17.7632 8.02655 18.2791 7.51037 18.2791 6.87363C18.2791 6.23688 17.7632 5.7207 17.1268 5.7207C16.4905 5.7207 15.9746 6.23688 15.9746 6.87363C15.9746 7.51037 16.4905 8.02655 17.1268 8.02655Z" fill="#FE7300"/>
              <path d="M2.40039 12.0004C2.40039 14.6098 2.41191 14.9365 2.458 15.9588C2.50409 16.981 2.66924 17.6805 2.90353 18.2915C3.14934 18.9218 3.47581 19.4598 4.00967 19.9901C4.5397 20.5205 5.07741 20.8548 5.70729 21.0969C6.31797 21.3352 7.01699 21.4966 8.03864 21.5427C9.06412 21.5889 9.39059 21.6004 11.9946 21.6004C14.6025 21.6004 14.929 21.5889 15.9506 21.5427C16.9723 21.4966 17.6713 21.3314 18.282 21.0969C18.9119 20.851 19.4496 20.5243 19.9796 19.9901C20.5096 19.4598 20.8438 18.9218 21.0857 18.2915C21.3239 17.6805 21.4852 16.981 21.5313 15.9588C21.5773 14.9327 21.5889 14.606 21.5889 12.0004C21.5889 9.39094 21.5773 9.06428 21.5313 8.04202C21.4852 7.01977 21.32 6.32033 21.0857 5.70928C20.8399 5.07901 20.5135 4.54098 19.9796 4.01064C19.4534 3.47645 18.9157 3.14595 18.2858 2.90383C17.6751 2.66556 16.9761 2.50415 15.9545 2.45804C14.929 2.41192 14.6025 2.40039 11.9985 2.40039C9.39059 2.40039 9.06412 2.41192 8.04248 2.45804C7.02083 2.50415 6.32182 2.66941 5.71113 2.90383C5.08125 3.14979 4.54354 3.47645 4.01351 4.01064C3.48349 4.54483 3.14934 5.07901 2.90737 5.70928C2.66924 6.32033 2.50409 7.01977 2.458 8.04202C2.41191 9.06428 2.40039 9.39094 2.40039 12.0004ZM4.13258 12.0004C4.13258 9.43706 4.1441 9.12961 4.19019 8.11889C4.23244 7.18118 4.38991 6.67005 4.52049 6.3357C4.69333 5.8899 4.90457 5.56708 5.24256 5.22889C5.58055 4.8907 5.89933 4.68702 6.3487 4.5064C6.68669 4.37573 7.19751 4.21816 8.13082 4.17589C9.14094 4.12977 9.44436 4.11825 12.01 4.11825C14.5756 4.11825 14.879 4.12977 15.8892 4.17589C16.8263 4.21816 17.3371 4.37573 17.6713 4.5064C18.1168 4.67933 18.4394 4.8907 18.7774 5.22889C19.1154 5.56708 19.319 5.88606 19.4995 6.3357C19.6301 6.67389 19.7875 7.18502 19.8298 8.11889C19.8759 9.12961 19.8874 9.43322 19.8874 12.0004C19.8874 14.5676 19.8759 14.8712 19.8298 15.8819C19.7875 16.8196 19.6301 17.3307 19.4995 17.6651C19.3267 18.1109 19.1154 18.4337 18.7774 18.7719C18.4394 19.1101 18.1207 19.3138 17.6713 19.4944C17.3333 19.6251 16.8225 19.7826 15.8892 19.8249C14.879 19.871 14.5756 19.8825 12.01 19.8825C9.44436 19.8825 9.14094 19.871 8.13082 19.8249C7.19367 19.7826 6.68285 19.6251 6.3487 19.4944C5.90317 19.3214 5.58055 19.1101 5.24256 18.7719C4.90457 18.4337 4.70101 18.1147 4.52049 17.6651C4.38991 17.3269 4.23244 16.8158 4.19019 15.8819C4.14026 14.8712 4.13258 14.5637 4.13258 12.0004Z" fill="#FE7300"/>
          </svg>
          <span>Instagram</span>
        </a> 
      </div>
    </div>
    <div class="offer-wrap-cards contacts-cards">
      <?php if(have_rows('contacts_links_row')) : while(have_rows('contacts_links_row')) : the_row(); ?>
      <a href="<?php the_sub_field('link'); ?>" class="offer-wrap-cards-item">
        <b><?php the_sub_field('name'); ?></b>
        <p><?php the_sub_field('text'); ?></p>
      </a>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="contacts-map wow animate__animated animate__fadeInUp">
    <iframe src="<?php the_field('map'); ?>" width="100%"></iframe>
      <div class="wrapper">
        <div class="contacts-map-wrap">
          <?php if(have_rows('contacts')) : while(have_rows('contacts')) : the_row(); ?>
          <div class="contacts-map-wrap-item">
            <b><?php the_sub_field('title'); ?></b>
            <adress><?php the_sub_field('adress'); ?></adress>
            <div class="contacts-map-wrap-item-row">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.06367 1.25L7.81459 1.25C8.12696 1.25 8.40662 1.44361 8.51659 1.73599L9.97202 5.60588C10.0202 5.73398 10.0324 5.87281 10.0073 6.00735L9.27804 9.91931C10.1744 12.0273 11.655 13.4439 14.1107 14.7146L17.9756 13.9657C18.1128 13.9391 18.2548 13.9514 18.3854 14.0012L22.2671 15.4804C22.5579 15.5912 22.7501 15.87 22.7501 16.1812L22.7501 19.7655C22.7501 21.391 21.3179 22.7101 19.6426 22.3456C16.589 21.6811 10.9317 19.9923 6.96974 16.0303C3.17461 12.2352 1.90306 6.99252 1.47503 4.15869C1.23079 2.54172 2.5276 1.25 4.06367 1.25ZM7.29537 2.75L4.06367 2.75C3.34465 2.75 2.86564 3.32183 2.9582 3.93467C3.37098 6.66748 4.5786 11.5179 8.0304 14.9697C11.6788 18.6181 16.9826 20.2317 19.9615 20.8799C20.6158 21.0222 21.2501 20.524 21.2501 19.7655L21.2501 16.698L18.0511 15.479L14.1428 16.2363C13.9801 16.2678 13.8117 16.2446 13.6636 16.1703C10.7694 14.7176 8.89045 12.9954 7.80372 10.2785C7.75093 10.1466 7.73673 10.0023 7.76278 9.86255L8.49439 5.9381L7.29537 2.75Z" fill="#FE7300"/>
                </svg>
              </div>
              <a href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a>
              <span><?php the_sub_field('work_time'); ?></span>
            </div>

          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
  </div>
  <div class="question contacts-question container wow animate__animated animate__fadeInUp">
    <div class="question-wrap">
      <div class="left">
        <b>Got a question?</b>
        <p>We're here to help and answer any question you might have</p>
      </div>
      <div class="right">
        <?php echo do_shortcode('[contact-form-7 id="4a616eb" title="Got a question"]'); ?>
      </div>
    </div>
  </div>
</section>


<!--Microdata Local-->
<div itemscope itemtype="http://schema.org/LocalBusiness">
  <meta itemprop="name" content="Elate Moving | Professional Moving Services">
	<!-- <meta itemprop="priceRange" content="от 60 000 ₽"> -->
	<meta itemprop="description" content="Elate Moving is a professional moving and storage company with the most trustworthy, dedicated, expert and white glove NYC movers.">
  <meta itemprop="telephone" content="<?php the_field('phone', 'options'); ?>">
	<meta itemprop="email" content="<?php the_field('email', 'options'); ?>">
  <link itemprop="url" href="<?php echo get_permalink(); ?>">
	<link itemprop="logo image" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
  <time itemprop="openingHours" datetime="Mo-Fr 09:00−18:00"></time>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <meta itemprop="addressCountry" content="US">
    <meta itemprop="addressLocality" content="New York">
    <meta itemprop="streetAddress" content="305 Broadway Floor 7 New York, NY 10007">
  </div>
</div>
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
