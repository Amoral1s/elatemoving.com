<?php
/**
 Template Name: Our blog
 */

get_header();
?>



<section  itemscope itemtype="http://schema.org/BlogPosting" class="blog-page page-top">
  <link itemprop="image" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
	<link itemprop="url" href="<?php echo get_permalink(); ?>">
	<meta itemprop="description" content="<?php the_excerpt(); ?>">
	<meta itemprop="author" content="<?php the_author(); ?>">
	<meta itemprop="datePublished" content="<?php the_time('c'); ?>">
	<meta itemprop="dateModified" content="<?php the_modified_date('c'); ?>">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title title-sub"><?php the_title(); ?></h1>
    <div class="blog-page-search search">
      <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
    </div>
    <?php if (get_tags()) { ?>
		<div class="single-tags">
      <?php 
        $tags = get_tags();

        foreach ( $tags as $tag ) {
          $tag_link = get_tag_link( $tag->term_id ); ?>
          <a href="<?php echo $tag_link; ?>" title="<?php echo $tag->name; ?>">
            <?php echo $tag->name; ?>
          </a>
        <?php } ?>
		</div>
		<?php } ?>
    <div class="blog-wrap">
      <?php
        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
        $args = array(
          'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
          'paged'          => $current_page, // текущая страница
          'post_type'      => 'post'
        );
        query_posts( $args );
        $wp_query->is_archive = true;
        $wp_query->is_home = false;
        while(have_posts()): the_post();
      ?>
      <a href="<?php the_permalink(); ?>" class="blog-wrap-item">
        <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
        <div class="date"><?php echo get_the_date('d.m.Y') ?></div>
        <b><?php the_title(); ?></b>
      </a>
      <?php endwhile; ?>
    </div>
    <?php if( function_exists('wp_pagenavi') ) wp_pagenavi();?>
    <div class="blog-page-sub">
      <div class="left">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/subscribe.svg" alt="icon">
          <div class="text">
            <b>Subscribe to our newsletter</b>
            <p>To be updated with the latest news</p>
          </div>
      </div>
      <div class="right">
        <?php echo do_shortcode('[contact-form-7 id="41c9f44" title="News subscription"]'); ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
