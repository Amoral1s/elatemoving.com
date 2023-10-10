<?php get_header(); ?>

<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

<section class="page page-top">
	<div class="single container">
		<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
		<h1 class="title" style="text-align: left">
			<?php the_title() ?>
		</h1>
		<div class="single-content content">
			<?php the_content() ?>
		</div>
	</div>
	<!-- /.single container -->
</section>

<!-- <main class="page">
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
</main> -->
<?php endwhile; endif; ?>

<?php get_footer();