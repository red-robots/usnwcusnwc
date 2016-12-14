<?php

 
global $embed_code, $force_feat_img, $vid_url, $post; 
$thumbID = get_post_thumbnail_id($post->ID);
?>
<div class="actions<?php if ( ! comments_open() ){ echo ' comments-hidden'; } ?>">
    
    
	
	
	
	 <?php if(is_page('whitewater-activities')) { ?>
                      <div class="actions">
                      <h2>wit</h2>
                      </div>
                      <?php }  ?>
                       <?php if(is_page('flatwater-activities')) { ?>
                      flat
                      <?php }  ?>
                       <?php if(is_page('Land-activities')) { ?>
                       land
                      <?php }  ?>
	
	
	
	
	
	<?php 
    // Play / Enlarge
    if( ( $embed_code || $vid_url ) && $force_feat_img): ?>
        <a href="<?php the_permalink(); ?>" title="Play this video" class="view play">Play</a>
    <?php else: 
    	$img_rel = ( has_post_format('gallery')) ? $post->ID : 'gallery';
    ?>
    
        </a>
    <?php endif; ?>
     
    <a class="share"><?php echo('Share'); ?></a>   
     
    <?php 
    // Comment count
    if ( comments_open() ): ?>
        <a href="<?php comments_link(); ?>" class="comment"><span><?php comments_number('0', '1', '%'); ?></span> <?php echo ('Comment'); ?></a> 
    <?php endif; ?>

    <div class="share-container">
        <div class="share-icons">
            
            <?php if( of_get_option('twitter') ):
                $twitRec = '&via='.of_get_option('twitter');
            else:
                $twitRec = ''; 
            endif; ?>
            
            <a href="http://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?><?php echo $twitRec; ?>" class="share-window">
            <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-ic-16.png" alt="Share on Twitter" /></a>
            
            <a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&t=<?php echo urlencode(get_the_title()); ?>"  class="share-window">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-ic-16.png" alt="Share on Facebook" />
            </a>
            
            <a href="http://www.tumblr.com/share/photo?source=<?php echo urlencode(wp_get_attachment_url($thumbID)) ?>&caption=<?php echo urlencode(get_the_title()); ?>&clickthru=<?php echo urlencode(get_permalink()); ?>" title="Share on Tumblr">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/tumblr-ic-16.png" alt="Share on Tumblr" />
            </a>
            
        </div><!-- #share-icons -->
    </div><!-- #share-container --> 
    
    
    <a href="<?php the_permalink(); ?>"   class="view">
       		<?php echo('Read More'); ?>
        </a> 
          
</div><!-- #actions --> 