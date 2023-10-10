<?php get_header(); ?>

<section class="page-top blog-page page-search">
	<div class="container">
		<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
		<?php if ( have_posts() ) : ?>
		<h1 class="page-title">
			<?php printf( esc_html__( 'Search Results for: %s', 'main-theme' ), '<span>' . get_search_query() . '</span>' ); ?>
		</h1>
		<div class="search">
			<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
		</div>
		<div class="page-search-wrap">
			<?php while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" class="page-search-wrap-item">
					<b><?php the_title(); ?></b>
					<?php if (the_excerpt()) { ?>
					<div class="text">
						<?php the_excerpt(); ?>
					</div>
					<?php } ?>
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M27.7823 28.0265C27.0919 28.0265 26.5323 27.4669 26.5323 26.7765V15.6521L13.9348 28.2497C13.4466 28.7378 12.6551 28.7378 12.167 28.2497C11.6788 27.7615 11.6788 26.97 12.167 26.4819L24.7645 13.8844L13.6401 13.8844C12.9498 13.8844 12.3901 13.3247 12.3901 12.6344C12.3901 11.944 12.9498 11.3844 13.6401 11.3844L27.7823 11.3844C28.4726 11.3844 29.0323 11.944 29.0323 12.6344V26.7765C29.0323 27.4669 28.4726 28.0265 27.7823 28.0265Z" fill="#FE7300"/>
						</svg>
					</div>
				</a>
			<?php	endwhile; ?>
		</div>
 
		<?php else : ?>

		<h1 class="page-title">
			No matches in search results
		</h1>
		<div class="search">
			<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
		</div>
		<?php endif; ?>
	</div>

</section><!-- #main -->

<?php get_footer();
