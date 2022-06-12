<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Business_Capital
 */

get_header();

$show_content_meta = get_post_meta( get_the_ID(), 'business-capital-hide-content', true );

if ( ! $show_content_meta ) :

	$show_content = business_capital_gtm( 'business_capital_show_homepage_content' );

	if ( $show_content || ! is_front_page() ) :
		get_sidebar();
	endif;
endif;
get_footer();
