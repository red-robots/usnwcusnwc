 <?php
/*
 * Template Name: All News
*/
get_header(); ?>

<div class="banner post">
	<?php if(function_exists('soliloquy_slider')) soliloquy_slider('1608'); 
	?>
</div>
<header class="post">
	<h1>News</h1>
</header>
<?php 
/*
 * The call to get_template_part gets the template function display_loop_tile
 * which queries the posts based on the supplied args
 * The arguments for the query are supplied as arguments for the function.
 * The loop cleans up and resets the query after it is called
 */
get_template_part('loop','tile');
display_loop_tile(array('cat'=>'4','post_type'=>'post','order'=>'ASC','posts_per_page'=>'-1'));
?>

<?php get_footer(); ?>