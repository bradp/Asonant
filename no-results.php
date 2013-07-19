<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package asonant
 */
?>

<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><?php _e( 'Nothing Found', 'asonant' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php do_action('asonant_before_no_results'); ?>

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'asonant' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'asonant' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'asonant' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>

		<?php do_action('asonant_after_no_results'); ?>

	</div><!-- .entry-content -->
</article><!-- #post-0 .post .no-results .not-found -->