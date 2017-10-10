<?php
/**
 * Configure shortcodes so we can apply special formatting to certain elements.
 * Primarily used so we can use a panel effect on any page.
 *
 * @package postsecret
 */

/**
 * Register shortcodes used by theme.
 */
function heathcliff_register_shortcodes() {
	add_shortcode( 'panel', 'heathcliff_panel_shortcode' );
}
add_action( 'init', 'heathcliff_register_shortcodes' );

/**
 * Output a container for a flipping card.
 */
function heathcliff_panel_shortcode( $attr, $content = '', $shortcode_tag ) {
	ob_start();
	?>
	<div class="heathcliff-panel">
		<div class="panel-content">
			<?php echo do_shortcode( wpautop( wp_kses_post( $content ) ) ); ?>
		</div>
	</div>

	<?php
	return ob_get_clean();
}
