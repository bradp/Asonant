<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package asonant
 */
?>
    <?php tha_content_bottom(); ?>
	</div><!-- #main -->
    <?php tha_content_after(); ?>
    <?php tha_footer_before(); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
        <?php tha_footer_top(); ?>
        <div id="footer-widgets">
            <div class="footer-widget left">
                <?php if ( ! dynamic_sidebar( 'sidebar-left-footer' ) ) : ?>

                    
                    <aside id="search" class="widget widget_search">
                        <?php get_search_form(); ?>
                    </aside>

                <?php endif; // end sidebar widget area ?>
            </div><!-- first -->
        
            <div class="footer-widget center">
                <?php if ( ! dynamic_sidebar( 'sidebar-center-footer' ) ) : ?>
                        
                    <aside id="archives" class="widget">
                        <h1 class="widget-title"><?php _e( 'Archives', 'asonant' ); ?></h1>
                        <ul>
                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                        </ul>
                    </aside>

                <?php endif; // end sidebar widget area ?>
            </div><!-- second -->

            <div class="footer-widget right">
                <?php if ( ! dynamic_sidebar( 'sidebar-right-footer' ) ) : ?>

                    <aside id="archives" class="widget">
                        <h1 class="widget-title"><?php _e( 'Archives', 'asonant' ); ?></h1>
                        <ul>
                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                        </ul>
                    </aside>

                <?php endif; // end sidebar widget area ?>
            </div><!-- third -->
        
            <div class="three columns">
                <?php if ( ! dynamic_sidebar( 'sidebar-right-footer' ) ) : ?>

                    <aside id="meta" class="widget">
                        <h1 class="widget-title"><?php _e( 'Meta', 'asonant' ); ?></h1>
                        <ul>
                            <?php wp_register(); ?>
                            <li><?php wp_loginout(); ?></li>
                            <?php wp_meta(); ?>
                        </ul>
                    </aside>

                <?php endif; // end sidebar widget area ?>
            </div><!-- fourth -->
        </div>


		<div class="site-info">
			<?php do_action( 'asonant_credits' ); ?>
			Proudly powered by <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'asonant' ); ?>" rel="generator"><?php printf( __( '%s', 'asonant' ), 'WordPress' ); ?></a>
			<?php printf( __( 'and Asonant by %1$s.', 'asonant' ), '<a href="http://BradParbs.com">Brad Parbs</a>' ); ?>
            <p><?php echo get_theme_mod('asonant_footer_text', '');?></p>
		</div><!-- .site-info -->
        <?php tha_footer_bottom(); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php tha_footer_after(); ?>
<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>

</body>
</html>