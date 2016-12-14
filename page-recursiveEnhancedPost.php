<?php 
/*
 * Template Name: Recursive Display Enhanced Post
 * @author: Fritz Healy
 * NOTE: Working from existing templates
 *
 *
 */

get_header(); ?>

<div class="banner post">
    <?php $slider=get_field("soliloquy");
	if(function_exists('soliloquy_slider')&&$slider) soliloquy_slider($slider->ID); 
	?>
</div>
<?php 
/*
 * the call to get_template_part gets the template function display_loop_tile_recursive_enhanced
 * which queries the posts based on the supplied args and displays the post and all children
 * as tiles
 * The arguments for the query are supplied as arguments to the function
 * The loop cleans up and resets the query after it is called
 */
get_template_part('loop','recursiveEnhancedPost');
display_loop_tile_recursive_enhanced_post(array('post_parent'=>$post->ID,'post_type'=>'page','order'=>'ASC', 'posts_per_page'=>'-1'));
?>


<?php get_footer(); 
?>