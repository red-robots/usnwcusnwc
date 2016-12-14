 <?php
/*
 * Template Name: Icons
*/
get_header('page'); ?>

<div class="banner post">
    <?php $slider=get_field("soliloquy");
	if(function_exists('soliloquy_slider')&&$slider) soliloquy_slider($slider->ID); 
	?>
</div>
<?php 
/*
 * The call to get_template_part gets the template function display_loop_icon
 * which queries the posts based on the supplied args
 * The arguments for the query are supplied as arguments for the function.
 * The loop cleans up and resets the query after it is called
 */
 get_template_part('loop','icon');
 display_loop_icon(array('post_parent'=>$post->ID,'post_type'=>'page','order'=>'ASC','posts_per_page'=>'-1'));
?>
<?php get_footer(); ?>