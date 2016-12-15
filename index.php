<?php
/* 
 * Template Name: Home
 * Frontpage (Blog)
 *
 * @since   1.0
 * @alter   1.6
*/

get_header(); ?>

<?php $post = get_post('1');
setup_postdata($post);
get_sidebar("banner");?>

<?php get_footer(); ?>