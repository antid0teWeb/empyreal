<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title><?php wp_title(); ?></title>
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <?php if( !is_home() ) { ?>
        	<style>
				header .header-top {  position: relative; }
			</style>
		<?php } ?>
		<!-- FAVICONS -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.png" type="image/png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.png" type="image/png">
        <?php wp_head(); ?>
	</head>

    <body>
    
    	<header>
        	<div class="header-top">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-3">
                        	<div class="logo">
                            	<a href="<?php bloginfo('home'); ?>">
                                	<img src="<?php echo of_get_option('logo'); ?>" alt="logo" class="img-responsive center-block" />
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-9">
                        	<div class="mainmenu">
                                <nav role="navigation" class="navbar top-navbar">
                                    <div class="navbar-header">
                                        <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>                                                                              
                                    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                                        <?php $args = array('theme_location' => 'main', 'menu_class' => 'nav navbar-nav navbar-right', 'container' => false, 'link_before' => '', 'link_after' =>'', 'walker' => new My_Walker_Nav_Menu()); wp_nav_menu($args);  ?>
                                    </div>
                                </nav>
            				</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if( is_home() ) { ?>
            <div class="header-bottom">
                <div id="carousel-banner" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    
						<?php 
                        global $post;
                        $tmp_post = $post;
                        $args = array( 'post_type' => 'slider', 'numberposts' => -1, 'offset'=> 0, 'orderby'  => 'post_date', 'order'  => 'DESC');
                        $myposts = get_posts( $args );
                        foreach( $myposts as $key => $post ):  setup_postdata($post); ?>
                        
                            <div class="item<?php echo ($key==0?' active':''); ?>">
                                <?php if (has_post_thumbnail( $post->ID ) ):
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider' );?>
                                
                                <img src="<?php echo $image[0];?>"  alt="banners" width="100%" /><?php endif; ?>
                                <div class="carousel-content">
                                    <div class="container">
                                        <div class="carousel-content-panel hidden-xs">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <?php endforeach; ?>
                        
                    </div>
                    <div class="carousel-nav">
                    	<a class="carousel-nav-prev" href="#carousel-banner" data-slide="prev">Prev</a>
                        <a class="carousel-nav-next" href="#carousel-banner" data-slide="next">Nexty</a>
                    </div>
                </div>
            </div>
            <?php } ?>	
        </header>