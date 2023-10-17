<?php get_header(); ?>
<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name): get_userdata(intval($author));
?>
<?php while ( have_posts() ) : the_post(); ?>

<section itemid="<?php echo get_permalink(); ?>" itemscope itemtype="http://schema.org/BlogPosting" class="single only-single-page page-top container">
		<meta itemprop="description" content="<?php the_excerpt(); ?>">
		<link itemprop="image" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
		<meta itemprop="author" content="<?php the_author(); ?>">
		<meta itemprop="datePublished" content="<?php the_time('c'); ?>">
		<meta itemprop="dateModified" content="<?php the_modified_date('c'); ?>">
	
	<div class="single-top">
		<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs blog-bread">', '</div>'); } ?>
		<?php if (get_tags()) { ?>
		<div class="single-tags">
			<?php the_tags( '','',''); ?>
		</div>
		<?php } ?>
		<h1 itemprop="headline" class="page-title"><?php the_title(); ?></h1>
		<?php if (get_field('post_subtitle')) { ?>
		<p class="subtitle"><?php the_field('post_subtitle'); ?></p>
		<?php } ?>
		<div class="author">
			<a class="row" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
				<div class="avatar">
					<?php 
						$author_id = get_the_author_meta('user_email');
						echo get_avatar( $author_id, $size = 60, $default = '', $alt = '', $args = null ) 
					?>
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/favicon/icon-192.png" alt="Avatar"> -->
				</div>
				<div itemprop="author" class="name">
					<p><?php the_author_meta('display_name'); ?></p>
					<span>Author</span>
				</div>
			</a>
			<!-- <?php the_author_posts_link() ?> -->
			<div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating" class="top-rat">
				<meta itemprop="bestRating" content="5">
				<meta itemprop="ratingValue" content="5">
				<div class="new-rating">
				
				</div>
				<div itemprop="ratingCount" class="votes">

				</div>
			</div>
			<div class="views">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M18.8192 13.3143C16.0873 7.39523 7.91302 7.39523 5.18115 13.3143C5.00757 13.6904 4.56198 13.8546 4.18589 13.681C3.8098 13.5074 3.64563 13.0618 3.81921 12.6857C7.08734 5.60476 16.913 5.60476 20.1812 12.6857C20.3547 13.0618 20.1906 13.5074 19.8145 13.681C19.4384 13.8546 18.9928 13.6904 18.8192 13.3143Z" fill="#FE7300"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M12 13.25C12.6904 13.25 13.25 13.8096 13.25 14.5C13.25 15.1904 12.6904 15.75 12 15.75C11.3096 15.75 10.75 15.1904 10.75 14.5C10.75 13.8096 11.3096 13.25 12 13.25ZM14.75 14.5C14.75 12.9812 13.5188 11.75 12 11.75C10.4812 11.75 9.25 12.9812 9.25 14.5C9.25 16.0188 10.4812 17.25 12 17.25C13.5188 17.25 14.75 16.0188 14.75 14.5Z" fill="#FE7300"/>
					</svg>
				</div>
				<div class="value">
					<?php setPostViews(get_the_ID()); ?>
					<?php echo getPostViews(get_the_ID()); ?>
				</div>
			</div>
			<div class="read-time">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 12.5C5.25 12.0858 5.58579 11.75 6 11.75L11.25 11.75L11.25 6.5C11.25 6.08579 11.5858 5.75 12 5.75C12.4142 5.75 12.75 6.08579 12.75 6.5L12.75 12.5C12.75 12.9142 12.4142 13.25 12 13.25L6 13.25C5.58579 13.25 5.25 12.9142 5.25 12.5Z" fill="#FE7300"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 12.5C2.75 17.6086 6.89137 21.75 12 21.75C17.1086 21.75 21.25 17.6086 21.25 12.5C21.25 7.39137 17.1086 3.25 12 3.25C6.89137 3.25 2.75 7.39137 2.75 12.5ZM12 23.25C6.06294 23.25 1.25 18.4371 1.25 12.5C1.25 6.56294 6.06294 1.75 12 1.75C17.9371 1.75 22.75 6.56294 22.75 12.5C22.75 18.4371 17.9371 23.25 12 23.25Z" fill="#FE7300"/>
					</svg>
				</div>
				<div class="time">
					~ <?php echo gp_read_time(); ?> min
				</div>
			</div>
		</div>
		<div class="thumb">
			<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" >
		</div>
	</div>

	<div class="single-nav">
		<b>Contents</b>
		<div class="single-nav-wrap">

		</div>
	</div>

	<div class="content">
		<?php the_content(); ?>
	</div>
	<div  class="comments">
		<?php comments_template(); ?>
	</div>
</section>

<section class="blog wow animate__animated animate__fadeInUp">
  <div class="container">
    <h2 class="title title-reverse ">
      Read more
    </h2>
    <div class="blog-slider swiper ">
      <div class="blog-wrap swiper-wrapper">
        <?php 
					$args = array(
						'posts_per_page'    => 4,
						'post__not_in'      => array(get_the_id())
      		);
          $my_posts = get_posts($args);
          foreach ($my_posts as $post) :
          setup_postdata($post);
        ?>
        <a href="<?php the_permalink(); ?>" class="blog-wrap-item swiper-slide">
          <img src="<?php the_post_thumbnail_url() ?>" alt="post thumbnail">
          <div class="date"><?php echo get_the_date('d.m.Y') ?></div>
          <b><?php the_title(); ?></b>
        </a>
        <?php endforeach; ?>
      </div>
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

<?php endwhile; ?>


<main class="page">
	<div itemscope itemtype="http://schema.org/Article" class="single container">
		<h1 itemprop="name headline" class="title">
			<?php the_title() ?>
		</h1>
		<meta itemprop="description" content="<?php the_excerpt(); ?>">
		<meta itemprop="author" content="<?php the_author(); ?>">
		<meta itemprop="datePublished" content="<?php the_time('c'); ?>">
		<meta itemprop="dateModified" content="<?php the_modified_date('c'); ?>">
		<meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="<?php echo get_permalink(); ?>" content=""/>
		<div itemprop="articleBody" class="single-content">
			<?php the_content() ?>
		</div>
	</div>
</main>

<?php get_footer();