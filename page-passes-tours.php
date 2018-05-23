 <?php
/*
 * Template Name: Passes-Tours Template
 */

get_header('page'); ?>

<?php while( have_posts() ) { the_post();

	get_sidebar("banner");?>

	<section class="post container passes-tours">
		<header>
			<h1><?php the_title();?></h1>
		</header>
		<?php $top_sections = get_field("top_sections");
		if($top_sections){
			foreach($top_sections as $section){
				$title = $section['title'];
				if($title){?>
					<a name="<?php echo strtolower(preg_replace('/[^0-9a-zA-Z\-]/','',sanitize_title_with_dashes($title)));?>"></a>
					<article class="row <?php echo strtolower(preg_replace('/[^0-9a-zA-Z\-]/','',sanitize_title_with_dashes($title)));?>">
						<?php 
						/*
						* Display the video or post_thumbnail featured image (if any)
						*/
						$image = $section['image'];
						if($image){?>
							<figure class="featured_image">
								<img src="<?php echo $image['sizes']['medium'];?>">
							</figure>
						<?php } 
						/*
						* Display the title of the post and the content
						*/
						?>
						<section class="copy">
							<header>
								<h2><?php echo $title; ?></h2>
							</header>
							<?php $copy = $section['copy'];
							if($copy) echo $copy;?>
						</section>
					</article>
				<?php } ?>
			<?php } //end of foreach 
		}//end of if?>
		<div class="buttons">
			<div class="button expand-button type-passes">Passes</div><!--.expand-button-->
			<div class="button expand-button type-passes">Tours</div><!--.expand-button-->
			<a class="button" href="<?php echo get_permalink();?>">Buy</div><!--.button-->
		</div><!--.buttons-->
	</section>
	<?php $activities = array(
		'Whitewater'=>'activity_whitewater',
		'Flatwater'=>'activity_flatwater',
		'Climbing'=>'activity_climbing',
		'Ziplines'=>'activity_ziplines',
		'Ropes'=>'activity_ropes',
		'Jumps'=>'activity_jumps',
		'Trails'=>'activity_trails'
	);?>
	<section class="post container passes">
		<header>
			<h1>Passes</h1>
		</header>
		<?php $passes_sections = get_field("passes_sections");
		if($passes_sections){
			foreach($passes_sections as $section){
				$title = $section['title'];
				if($title){?>
					<a name="<?php echo strtolower(preg_replace('/[^0-9a-zA-Z\-]/','',sanitize_title_with_dashes($title)));?>"></a>
					<article class="row <?php echo strtolower(preg_replace('/[^0-9a-zA-Z\-]/','',sanitize_title_with_dashes($title)));?>">
						<?php 
						/*
						* Display the video or post_thumbnail featured image (if any)
						*/
						$image = $section['image'];
						if($image){ ?>
							<figure class="featured_image">
								<img src="<?php echo $image['sizes']['medium'];?>">
							</figure>
						<?php } 
						/*
						* Display the title of the post and the content
						*/
						?>
						<section class="copy">
							<header>
								<h2><?php echo $title; ?></h2>
							</header>
							<?php $copy = $section['copy'];
							if($copy) echo $copy;?>
							
							<ul class="top-level-menu">
								<?php /* loop for activity access section */
								foreach($activities as $key => $activity){?>
									<li class="top-level-item">
										<div class="title">+ <?php echo $key;?></div><!--.title-->
										<?php if(have_rows($activity,62) ) {?>
											<table class="sub-menu">
												<thead>
													<tr>
														<th></th>
														<th>Difficulty</th>
														<th>Qualifiers</th>
													</tr>
												</thead>
												<tbody>
													<?php while(have_rows($activity,62)) { 
														the_row(); ?>
														<tr>
															<?php // fields
															$name = get_sub_field('name');
															$difficutly = get_sub_field('difficutly');
															$qualifiers = get_sub_field('qualifiers');
															$beg = in_array( 'Easy', $difficutly );
															$int = in_array( 'Intermediate', $difficutly );
															$adv = in_array( 'Difficult', $difficutly );?>

															<td>
																<?php if($name) echo $name;?>
															</td>
															<td>
																<div class="difficulty">
																	<div class="diff-icon">
																		<?php if( $beg ) { ?>
																			<img class="activity-key" src="<?php bloginfo('template_url'); ?>/images/diff-easy.png" />
																		<?php } ?>
																	</div>
																	<div class="diff-icon">
																		<?php if( $int ) { ?>
																			<img class="activity-key" src="<?php bloginfo('template_url'); ?>/images/diff-med.png" />
																		<?php } ?>
																	</div>
																	<div class="diff-icon">
																		<?php if( $adv ) { ?>
																			<img class="activity-key" src="<?php bloginfo('template_url'); ?>/images/diff-advanced.png" />
																		<?php } ?>
																	</div>
																</div>
															</td>
															<td>
																<?php if($qualifiers) echo $qualifiers;?>
															</td>
														</tr>
													<?php }//end for while?>
												</tbody>
											</table> 
										<?php } // end for if?>
									</li>
								<?php } //end for foreach ?>
							</ul>
							<?php //section for buttons for each activity
							$buttons = $section['buttons'];
							if($buttons){?>
								<div class="buttons">
									<?php foreach($buttons as $button){
										$link = $button['link'];
										$text = $button['text'];
										if($link&&$text){?>
											<a class="button" href="<?php echo $link;?>"><?php echo $text;?></a>
										<?php } // end for if?>
									<?php }// end for foreach?>
								</div><!--.buttons-->
							<?php } //end for if?>
						</section>
					</article>
				<?php } ?>
			<?php } //end of foreach 
		}//end of if?>
	</section>

	<section class="post container tours">
		<header>
			<h1>Tours</h1>
		</header>
		<?php $tours_sections = get_field("tours_sections");
		if($tours_sections){
			foreach($tours_sections as $section){
				$title = $section['title'];
				if($title){?>
					<a name="<?php echo strtolower(preg_replace('/[^0-9a-zA-Z\-]/','',sanitize_title_with_dashes($title)));?>"></a>
					<article class="row <?php echo strtolower(preg_replace('/[^0-9a-zA-Z\-]/','',sanitize_title_with_dashes($title)));?>">
						<?php 
						/*
						* Display the video or post_thumbnail featured image (if any)
						*/
						$image = $section['image'];
						if($image){ ?>
							<figure class="featured_image">
								<img src="<?php echo $image['sizes']['medium'];?>">
							</figure>
						<?php } 
						/*
						* Display the title of the post and the content
						*/
						?>
						<section class="copy">
							<header>
								<h2><?php echo $title; ?></h2>
							</header>
							<?php $copy = $section['copy'];
							if($copy) echo $copy;?>

							<?php /*
							* Get all of the fields for pass type and qualifiers and difficulty
							* to variables
								*/
							$difficulty = $section['difficulty'];
							$quals = $section['qualifiers'];
							$beg = in_array( 'beginner', $difficulty );
							$int = in_array( 'intermediate', $difficulty );
							$adv = in_array( 'advanced', $difficulty );	
							/*
							* If any of the qualifier or difficulty data variables are set 
							* display the qualifiers and difficulty based on which are set in 
							* this post
							*/
							if($quals||$beg||$int||$adv){ ?>
								<div class="qualifiers difficulty container">
									<?php if($quals) { ?>
										<div class="qualifiers">
											<span class="title">Qualifiers:</span> 
											<p><?php echo $quals; ?></p>
										</div>
									<?php } ?>		
									<?php if ( $beg || $int || $adv ) { ?>	
										<div class="difficulty">
											<span>Difficulty:</span>
											<div>
												<?php if( $beg ) { ?>
													<img src="/wp-content/uploads/2014/11/Easy2.png" /> <span>Beginner</span> <br />
												<?php }
												if( $int ) { ?>
													<img src="/wp-content/uploads/2014/11/medium2.png" /> <span>Intermediate</span> <br />
												<?php } 
												if( $adv ) { ?>
													<img src="/wp-content/uploads/2014/11/Advanced2.png" /> <span>Advanced</span> 
												<?php } ?>
											</div>
										</div>
									<?php }?>
								</div> 
							<?php }?>
							<?php //section for buttons for each activity
							$buttons = $section['buttons'];
							if($buttons){?>
								<div class="buttons">
									<?php foreach($buttons as $button){
										$link = $button['link'];
										$text = $button['text'];
										if($link&&$text){?>
											<a class="button" href="<?php echo $link;?>"><?php echo $text;?></a>
										<?php } // end for if?>
									<?php }// end for foreach?>
								</div><!--.buttons-->
							<?php } //end for if?>
						</section>
					</article>
				<?php } ?>
			<?php } //end of foreach 
		}//end of if?>
	</section>

<?php }//endwhile
 get_footer('page'); ?>