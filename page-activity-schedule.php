 <?php
/*
 * Template Name: Activity Schedule
 */

get_header('page'); ?>

<?php while( have_posts() ) { the_post();

	get_sidebar("banner");?>

	<?php $activities = array(
		'Whitewater'=>'activity_whitewater',
		'Flatwater'=>'activity_flatwater',
		'Climbing'=>'activity_climbing',
		'Ziplines'=>'activity_ziplines',
		'Ropes'=>'activity_ropes',
		'Jumps'=>'activity_jumps',
		'Trails'=>'activity_trails'
	);?>
	<section class="post container activity-schedule">
		<header>
			<h1><?php the_title();?></h1>
		</header>
		<?php $date_notice = get_field("date_notice");
		if($date_notice){?>
			<?php echo $date_notice;?>
		<?php }//endif?>
		<ul class="activity-schedule-list">
			<?php /* loop for activity access section */
			foreach($activities as $key => $activity){?>
				<li class="top-level-item">
					<span class="title"><?php echo $key;?></span>
					<ul>
						<?php $rows = get_field($activity);
						if($rows){
							foreach($rows as $row) {
								$closed = $row['closed'];
								$start_time = $row['start_time'];
								$end_time = $row['end_time'];
								$title = $row['title'];
								$copy = $row['copy'];?>
								<?php if($title){?>
									<li class="<?php $now = new DateTime();
									if(!empty($closed)||
										((new DateTime($start_time))->getTimestamp())>$now->getTimestamp()||
										((new DateTime($end_time))->getTimestamp())<$now->getTimestamp()) 
										echo "closed";?>">
										<span class="title"><?php echo $title;?></span>
										<?php if(!empty($closed)||
										((new DateTime($start_time))->getTimestamp())>$now->getTimestamp()||
										((new DateTime($end_time))->getTimestamp())<$now->getTimestamp()){?>
											<span class="time">Closed</span>
										<?php }  elseif($start_time||$end_time){?>
											<span class="time"><?php if($start_time){
												echo $start_time;
											}
											echo "-";
											if($end_time){
												echo $end_time;
											}?></span>
										<?php } //endif?>
										<?php if($copy){?>
											<div class="clearfix"></div>
											<div class="copy">
												<?php echo $copy;?>
											</div><!--.copy-->
										<?php }?>
									</li>
								<?php }//endif?>
							<?php }//end foreach 
						}//endif?>
					</ul>
				</li>
			<?php } //end for foreach ?>
		</ul>	
		<?php the_content();?>
	</section>
<?php }//endwhile
 get_footer('page'); ?>