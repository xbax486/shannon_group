<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package shannon group
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function shannon_group_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'shannon_group_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function shannon_group_jetpack_setup
add_action( 'after_setup_theme', 'shannon_group_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function shannon_group_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function shannon_group_infinite_scroll_render
