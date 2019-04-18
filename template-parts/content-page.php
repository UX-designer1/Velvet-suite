<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Velvet_Suite
 */

?>


	<?php velvet_suite_post_thumbnail(); ?>

		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'velvet-suite' ),
			'after'  => '</div>',
		) );
		?>


