<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="skip-content" role="main">

	<?php do_action( 'cleaning_expert_above_slider' ); ?>

	<?php if( get_theme_mod('cleaning_expert_slider_hide_show') != ''){ ?>
	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 pd-0">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<?php $cleaning_expert_slider_pages = array();
						for ( $count = 1; $count <= 4; $count++ ) {
							$mod = intval( get_theme_mod( 'cleaning_expert_slider'. $count ));
							if ( 'page-none-selected' != $mod ) {
							$cleaning_expert_slider_pages[] = $mod;
							}
						}
						if( !empty($cleaning_expert_slider_pages) ) :
							$args = array(
								'post_type' => 'page',
								'post__in' => $cleaning_expert_slider_pages,
								'orderby' => 'post__in'
							);
							$query = new WP_Query( $args );
						if ( $query->have_posts() ) :
							$i = 1;
						?>     
							<div class="carousel-inner" role="listbox">
								<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
									<div <?php if($i == 1){echo 'class="carousel-item fade-in-image active"';} else{ echo 'class="carousel-item fade-in-image"';}?>>
									<!-- <div class="row"> -->
										<div class="col-lg-4 sliderimg">
											<img src="<?php esc_url(the_post_thumbnail_url('full')); ?>" alt="<?php the_title_attribute(); ?> "/>
										</div>
										<div class="inner-carousel">
											<!-- <div class="contenbx"></div> -->
											<?php if(get_theme_mod('cleaning_expert_sliderheading') != ''){?>
												<h3><?php echo esc_html(get_theme_mod('cleaning_expert_sliderheading')); ?></h3>
											<?php }?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
											<p class="mb-0"><?php $cleaning_expert_excerpt = get_the_excerpt(); echo esc_html( cleaning_expert_string_limit_words( $cleaning_expert_excerpt,20 ) ); ?></p>
											<a href="<?php the_permalink(); ?>" class="read-btn"><span><i class="fa fa-calendar" aria-hidden="true"></i><?php esc_html_e('Book a schedule','cleaning-expert'); ?></span><span class="screen-reader-text"><i class="fa fa-calendar" aria-hidden="true"></i><?php esc_html_e('Book a schedule','cleaning-expert'); ?></span></a>
										</div>

											<div class="sliderimg">
												
											</div>

										
										<!-- </div> -->
									</div>	
									
								<?php $i++; endwhile; 
								wp_reset_postdata();?>
							</div>
						<?php else : ?>
							<div class="no-postfound"></div>
						<?php endif;
						endif;?>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
							<span class="screen-reader-text"><?php esc_html_e( 'Prev','cleaning-expert' );?></span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
							<span class="screen-reader-text"><?php esc_html_e( 'Next','cleaning-expert' );?></span>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-lg-3 pd-0 mainrhsbx">
					<div class="s_rhsbx">
						<div class="row">
							<div class="col-lg-3 pd-0">
								<div class="sicn">
									<i class="fa fa-magic" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-lg-9">
								<div class="srhs-title">
									<h3><?php echo esc_html(get_theme_mod('cleaning_expert_sliderleftboxtext')); ?></h3>
									<!-- <//?php echo ($slideimgtxt);  ?> -->
								</div>
							</div>
						</div>
					</div>

					<div class="slide-rhs-img">
						<?php 
							$cleaning_expert_sliderleftboximage = get_theme_mod('cleaning_expert_sliderleftboximage');

							if(!empty($cleaning_expert_sliderleftboximage)){
								echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($cleaning_expert_sliderleftboximage).'" class="img-responsive secondry-bg-img" />';
							}else{
								echo '<img alt="cleaning_expert_sliderleftboximage" src="'.get_template_directory_uri().'/assets/images/default.png" class="img-responsive" />';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php }?>
	
	<?php do_action('cleaning_expert_below_slider'); ?>

	<?php if(get_theme_mod('cleaning_expert_featurecategory_setting') != ''){?>

		<section id="feature-section" >
			<div class="container"> 
	        	<div class="featuresus">
					<div class="feature-heading section-heading">
						<?php if(get_theme_mod('cleaning_expert_featuresection_title') != ''){?>
				      		<h3><?php echo esc_html(get_theme_mod('cleaning_expert_featuresection_title')); ?></h3>
				      	<?php }?>
					</div>
			       	<div class="row mr-0">
				       	<?php $cleaning_expert_catData2 = get_theme_mod('cleaning_expert_featurecategory_setting');
						if($cleaning_expert_catData2){ 
							$args = array(
								'post_type' => 'post',
								'category_name' => $cleaning_expert_catData2,
					        );
					        $i=1; ?>
				    		<?php $query = new WP_Query( $args );
				          	if ( $query->have_posts() ) :
				        		while( $query->have_posts() ) : $query->the_post(); ?>
				        			<div class="col-lg-3 col-md-6 featuresbx">
					      				 <div class="featuresbxs">
					      					<div class="hi-icon">
					      						<i class="fa fa-podcast"></i>
					      					</div>
				  							<div class="features-area-data">
					            				<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
								              	<p ><?php $cleaning_expert_excerpt = get_the_excerpt(); echo esc_html( cleaning_expert_string_limit_words( $cleaning_expert_excerpt,15 ) ); ?></p>
				            				</div>
					      				</div> 
					      			</div>
				          		<?php $i++; endwhile; 
				          		wp_reset_postdata(); ?>
				          	<?php else : ?>
				              	<div class="no-postfound"></div>
				            <?php endif; ?>
				  		<?php }?>
				  	</div>
			  </div>
			</div>
		</section>

	<?php }?>

	<?php do_action('cleaning_expert_below_service_section'); ?>

	<?php if(get_theme_mod('cleaning_expert_section_title') != '' || get_theme_mod('cleaning_expert_category_setting') != ''){?>

		<section id="service-section">
			<div class="container"> 
	        	<div class="service-head section-heading">
					
					<?php if(get_theme_mod('cleaning_expert_section_title') != ''){?>
			      		<h3><?php echo esc_html(get_theme_mod('cleaning_expert_section_title')); ?></h3>
			      	<?php }?>
		       	</div>
		       	<div class="row">
			       	<?php $cleaning_expert_catData1 = get_theme_mod('cleaning_expert_category_setting');
					if($cleaning_expert_catData1){ 
						$args = array(
							'post_type' => 'post',
							'category_name' => $cleaning_expert_catData1,
				        );
				        $i=1; ?>
			    		<?php $query = new WP_Query( $args );
			          	if ( $query->have_posts() ) :
			        		while( $query->have_posts() ) : $query->the_post(); ?>
			        			<div class="col-lg-4 col-md-6 single-service-bx">
				      				<div class="service-box ">
				      					<div class="service-img">
				      						<?php the_post_thumbnail(); ?>
				      						<div class="sec-icn">
				      							<a href="#">
			                                    	<i class="fa fa-home"></i>
			                                    </a>
			                                    <div class="clearfix"></div>
				      						</div>
				      						<div class="clearfix"></div>
				      					</div>
			  							<div class="service-content">
				            				<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							              	<p><?php $cleaning_expert_excerpt = get_the_excerpt(); echo esc_html( cleaning_expert_string_limit_words( $cleaning_expert_excerpt,15 ) ); ?></p>
							              	<div class="service-btn ">
							              		<a href="<?php the_permalink(); ?>" class="read-btn"><span><?php esc_html_e('Learn More','cleaning-expert'); ?></span><span class="screen-reader-text"><?php esc_html_e('Learn More','cleaning-expert'); ?></span></a>
							              	</div>
			            				</div>
				      				</div>
				      			</div>
			          		<?php $i++; endwhile; 
			          		wp_reset_postdata(); ?>
			          	<?php else : ?>
			              	<div class="no-postfound"></div>
			            <?php endif; ?>
			  		<?php }?>
			  	</div>
			</div>
		</section>

	<?php }?>

	<?php do_action('cleaning_expert_below_service_section'); ?>

	<!-- <div class="container">
	  	<//?php while ( have_posts() ) : the_post(); ?>
	  		<div class="lz-content py-5">
	        	<//?php the_content(); ?>
	        </div>
	    <//?php endwhile; // end of the loop. ?>
	</div> -->
</main>

<?php get_footer(); ?>