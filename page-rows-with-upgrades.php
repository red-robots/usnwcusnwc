<?php
/*
 * Template Name: Rows With Upgrades Template
 */
get_header('page'); ?>

  
<div class="banner post">
    <?php $slider=get_field("soliloquy");
	if(function_exists('soliloquy_slider')&&$slider) soliloquy_slider($slider->ID); 
	?>
</div>
<?php
/*
 *
 */   
get_template_part('loop','article');
display_loop_article(array(
	'post_parent'=>$post->ID,
	'post_type'=>'page',
	'order'=>'ASC',
	'posts_per_page'=>'-1',
	'meta_query' => array(
        array(
            'key' => 'upgrade_check', // name of custom field
            'value' => 'no'
        )
    )
));
display_loop_article(array(
	'post_parent'=>$post->ID,
	'post_type'=>'page',
	'order'=>'ASC',
	'posts_per_page'=>'-1',
	'meta_query' => array(
        array(
            'key' => 'upgrade_check', // name of custom field
            'value' => 'yes'
        )
    )
));
?>
    

<?php get_footer('page'); ?>