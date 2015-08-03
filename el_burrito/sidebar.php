<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package el_burrito
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
		<?php if ( is_active_sidebar( 'the_sidebar' ) ) : ?> 
					<div class="sidebar-widgets"> 
						<?php dynamic_sidebar( 'the_sidebar' ); ?> 
					</div>
						<?php endif; ?> 
					</div> 
</div><!-- #secondary -->
