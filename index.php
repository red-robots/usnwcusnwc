<?php
/* 
 * Template Name: Home
 * Frontpage (Blog)
 *
 * @since   1.0
 * @alter   1.6
*/

get_header(); ?>

<div class="banner post">

<?php if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( '534' ); ?>

</div>
    

<?php get_footer(); ?>