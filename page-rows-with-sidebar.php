 <?php
/*
 * Template Name: Rows with sidebar Template
 */

get_header(); ?>

  
<div class="banner post">
    <?php $slider=get_field("soliloquy");
	if(function_exists('soliloquy_slider')&&$slider) soliloquy_slider($slider->ID); 
	?>
</div>
<?php

if(in_array(get_field('sidebar'),array("top","both"),true)){
	$sidebar="top";
	get_template_part('sidebar');
}

/*
 *
 */   
get_template_part('loop','article');
display_loop_article(array(
	'post_parent'=>$post->ID,
	'post_type'=>'page',
	'order'=>'ASC',
	'posts_per_page'=>'-1'
));

if(in_array(get_field('sidebar'),array("bottom","both"),true)){
	$sidebar="bottom";
	get_template_part('sidebar');
} 
?>
    

<?php get_footer(); ?>