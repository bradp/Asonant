<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package asonant
 */

get_header(); ?>

	<section id="primary">
			<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'asonant' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php do_action('asonant_before_search-results'); ?>

				<?php get_template_part( 'content', 'search' ); ?>

				<?php do_action('asonant_after_search-results'); ?>

			<?php endwhile; ?>

			<?php asonant_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>