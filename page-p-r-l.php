 <?php
/*
 * Template Name: Relax Top Level
*/
get_header('page'); ?>

  
<div id="grid">


   
<?php $this_page_id=$wp_query->post->ID; ?>
	

<?php 
/* Let's query some posts first... */
query_posts(array(
'showposts' => 40, // how many pages to show
'post__not_in' => array(17,4474), // Do not show, 17 = Event calendar, 4474 = GoPro Helmet rental 
'post_parent' => $this_page_id, // parent page
'post_type' => 'page',  // this is a page not a post
'orderby' => 'menu_order', /// order by this order.
'order' => 'ASC')); /// Reverse that order menu order to correct top down

/* Say hello to the Loop... */
if ( have_posts() ) : 





/* Anything placed in #sort is positioned by jQuery Masonry */ ?>
<div class="sort">
    


    
    <?php while ( have_posts() ) : the_post(); 
    	
    	global $my_size, $force_feat_img, $embed_code, $vid_url;
    	
        // Gather custom fields
        //$embed_code = get_post_meta($post->ID, 'soy_vid', true);
        //$vid_url = get_post_meta($post->ID, 'soy_vid_url', true);
        $force_feat_img = get_post_meta($post->ID, 'soy_hide_vid', true);
        $show_title = get_post_meta($post->ID, 'soy_show_title', true);
        $show_desc = get_post_meta($post->ID, 'soy_show_desc', true);
        $box_size = get_post_meta($post->ID, 'soy_box_size', true); 
        
        if( $box_size == 'Medium (485px)' ){
            $my_size = 'col3';
            $embed_size = '495';
        } else if( $box_size == 'Large (660px)' ){
            $my_size = 'col4';
            $embed_size = '670';
        } else if( $box_size == 'Tiny (135px)' ){
            $my_size = 'col1';
            $embed_size = '145';
        }else{
            $my_size = 'col2';
            $embed_size = '320';
        }
        
        /* Check whether content is being displayed
         * This determines whether a border should be applied
         * above the postmeta section
        */
        if($show_title != 'No'){
            $content_class = 'has-content';
        } else if($show_desc != 'No' && $post->post_content){
            $content_class = 'has-content';
        }else {
            $content_class = 'no-content';
        }
        
        // Assign categories as class names to enable filtering
        $category_classes = '';
        
        foreach( ( get_the_category() ) as $category ) {
            $category_classes .= $category->category_nicename . ' ';
        } 
    ?>
    
    <div class="all box <?php echo $category_classes . $my_size; ?>">
    
        
        <div <?php post_class( 'box-content '.$content_class ) ?>>
            <?php // Display featured image
            if ( has_post_thumbnail() ): ?>
            
                <div class="img-container">  
                 <?php if ( get_post_meta($post->ID, 'link-url', true) ) { ?>  
                    <?php 
                    // Display the appropriate sized featured image
                    if( $my_size != 'col2' ): ?>
                   
                        <a href="<?php echo get_post_meta($post->ID, "link-url", $single = true); ?>"><?php the_post_thumbnail($my_size, array( 'class' => 'feat-img' ) ); ?></a>
                        
                    <?php else: ?>
                        <a href="<?php echo get_post_meta($post->ID, "link-url", $single = true); ?>"><?php the_post_thumbnail('post-thumbnail', array( 'class' => 'feat-img' ) ); ?></a>
                    <?php endif; ?>
                    <?php } //link-url ?>
                    
                      
                    
                </div><!-- #img-container -->
                
                <?php //if( has_post_format( 'gallery' ) ) get_template_part( 'includes/gallery-list' ); ?>
                
            <?php endif; // #has_post_thumbnail() ?>
            
            <div class="post-content">
            
	            <?php // Display post title ?>
                <?php if ( get_post_meta($post->ID, 'link-url', true) ) { ?>
	            <h2><a href="<?php echo get_post_meta($post->ID, "link-url", $single = true); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
	                	<?php the_title(); ?>
	                </a></h2>
                    <?php } //link-url ?>
	           
                <?php // Display post content
	            
	            
	                if( has_excerpt() ){ 
	                    the_excerpt(); 
	                } else {
	                    the_content(__('Continue Reading &rarr;', 'usnwc'));
	                }
	                
	             ?>
	            
	             
            </div><!-- #entry -->
            
            <?php // Display post footer ?>
                <div class="post-footer">
                
                <?php if ( $post->post_parent == '100' ) {?>
                <div class="price">
                <?php if ( get_post_meta($post->ID, 'price', true) ) { ?>	
                <?php echo get_post_meta($post->ID, "price", $single = true); ?>
                <?php  } ?>
                </div>
                <?php } ?>
                
                
                <?php if ( get_post_meta($post->ID, 'link-url', true) ) { ?>
                <a href="<?php echo get_post_meta($post->ID, "link-url", $single = true); ?>">
                   LEARN MORE
                 </a><!-- link to the post -->  
                 <?php } //link-url ?>
                </div>
            
            
        </div><!-- #box-content -->
        
    </div><!-- #box -->
    <?php endwhile; endif; ?>
</div><!-- #sort -->



  </div><!-- grid -->
    

<?php get_footer('page'); ?>