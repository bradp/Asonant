<?php
/**
 * The template for displaying search forms in asonant
 *
 * @package asonant
 */
?>
<?php do_action('asonant_before_search_form'); ?>
	<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="screen-reader-text"><?php _ex( 'Search', 'assistive text', 'asonant' ); ?></label>
		<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'asonant' ); ?>" />
		<input type="submit" class="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'asonant' ); ?>" />
	</form>
<?php do_action('asonant_after_search_form'); ?>