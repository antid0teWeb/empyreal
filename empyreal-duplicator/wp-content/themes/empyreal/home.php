<?php get_header(); ?>
	<div class="holder">
		<div class="welcome-holder text-center">
			<div class="container">
				<div id="about-us"class="welcome-content">
					<?php echo of_get_option('welcome'); ?>
				</div>
			</div>
			<div class="container">
				<div class="box-holder text-left">
					<div class="row no-margin">
						<div class="col-sm-4 no-padding">
							<div class="shadow">
								<div class="box">
									<div class="row">
										<div class="col-sm-2 col-xs-3">
											<i class="fa  fa-user"></i>
										</div>
										<div class="col-sm-10">
											<?php echo of_get_option('about_us'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 no-padding">
							<div class="shadow">
								<div class="box">
									<div class="row">
										<div class="col-sm-2 col-xs-3">
											<i class="fa fa-cloud"></i>
										</div>
										<div class="col-sm-10">
											<?php echo of_get_option('cloud'); ?>
										</div>
									</div>
								</div>
							 </div>   
						</div>
						<div class="col-sm-4 no-padding">
							<div class="shadow">
								<div class="box">
									<div class="row">
										<div class="col-sm-2 col-xs-3">
											<i class="fa  fa-paper-plane"></i>
										</div>
										<div class="col-sm-10">
											<?php echo of_get_option('it_managed'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="services" class="service-holder">
			<div class="container">
				<br/>
				<div class="title text-center">
					<h3><?php echo of_get_option('service_title'); ?></h3>
				</div>
				<br/>
				<div class="row">
                
                	<?php 
					global $post;
					$tmp_post = $post;
					$args = array( 'post_type' => 'services', 'numberposts' => 4, 'offset'=> 0, 'orderby'  => 'post_date', 'order'  => 'DESC');
					$myposts = get_posts( $args );
					foreach( $myposts as $key => $post ):  setup_postdata($post); ?>
			
                        <div  class="col-sm-3">
                            <div class="service-box text-center">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                                <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                                <p><?php excerpt(20); ?></p>
                            </div>
                            <div id="news" class="button text-center">
                                <a href="<?php the_permalink(); ?>">Read More >></a>
                            </div>
                        </div>
                    
					<?php endforeach; ?>
                    
				</div>
			</div>
		</div>
		<br/>
		<br  class="hidden-xs"/>
		<div class="latest-holder">
			<div class="container">
            	
                <?php global $post; $post=get_post(of_get_option('latest_technologies')); setup_postdata($post); ?>
                
				<div class="row">
					<div class="col-sm-5">
						<?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?>
					</div>
					<div class="col-sm-7">
                    	<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				</div>
                
			</div>
		</div>
		<br/>
		<div class="test-holder">
			<div class="container">
				<br/>
				<div class="title text-center">
					<h3><span><?php echo of_get_option('testimonial_title'); ?></span></h3>
				</div>
				<br/>
				<br/>
				<div class="row">
                
                	<?php 
					global $post;
					$tmp_post = $post;
					$args = array( 'post_type' => 'testimonial', 'numberposts' => 3, 'offset'=> 0, 'orderby'  => 'post_date', 'order'  => 'DESC');
					$myposts = get_posts( $args );
					foreach( $myposts as $key => $post ):  setup_postdata($post); ?>
                
                        <div class="col-sm-4">
                            <div class="test-box">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-5">
                                        <?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?>
                                    </div>
                                    <div class="col-sm-8 col-xs-7">
                                        <?php the_content(); ?>
                                        <div class="testimonial-title">
                                            <h6><?php the_title(); ?></h6>
                                            <?php if( function_exists('the_field') ) { ?><h5><?php the_field('designation'); ?></h5><?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php endforeach; ?>
                    
				</div>
			</div>
		</div>
		<div class="clint-holder">
			<div class="container">
				<div class="arrow text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/others/clint-arrow.png" alt="post" class="img-responsive" />
				</div>
				<br/>
				<div  id="contact"class="clint-logo">
					<ul class="list-inline">
                    	
                        <?php 
						global $post;
						$tmp_post = $post;
						$args = array( 'post_type' => 'client', 'numberposts' => 6, 'offset'=> 0, 'orderby'  => 'post_date', 'order'  => 'DESC');
						$myposts = get_posts( $args );
						foreach( $myposts as $key => $post ):  setup_postdata($post); ?>
                        
                            <li><a href="#"><?php the_post_thumbnail('full',array('class'=>'center-block')); ?></a></li>
                            
                        <?php endforeach; ?>    
                            
					</ul>
				</div>
			</div>
		</div>
	</div> 
<?php get_footer(); ?>        