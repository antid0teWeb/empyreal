		<footer>
        	<div class="foot-top">
            	<div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <?php dynamic_sidebar('footer_box_1'); ?>
                        </div>
                        <div class="col-sm-2">
                        	<?php dynamic_sidebar('footer_box_2'); ?>
                        </div>
                        <div class="col-sm-3">
                        	<?php dynamic_sidebar('footer_box_3'); ?>
                        </div>
                        <div class="col-sm-3">
                        	<?php dynamic_sidebar('footer_box_4'); ?>
                        	<br/>
                            <div class="share">
                            	<ul class="list-inline">
                                	<?php if( of_get_option('facebook')!="" ) { ?><li><a href="<?php echo of_get_option('facebook'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/share-1.png" alt="share" /></a></li><?php } ?>
                                    <?php if( of_get_option('twitter')!="" ) { ?><li><a href="<?php echo of_get_option('twitter'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/share-2.png" alt="share" /></a></li><?php } ?>
                                    <?php if( of_get_option('instagram')!="" ) { ?><li><a href="<?php echo of_get_option('instagram'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/share-3.png" alt="share" /></a></li><?php } ?>
                                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3273.1587320302096!2d138.4877779514196!3d-34.87736017944009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s10%2F153+Brebner+Drive%2C+West+Lakes%2C+South+Australia!5e0!3m2!1sen!2sau!4v1446541249207" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center">
            	<div class="container">
                	<p><?php echo of_get_option('copyrights'); ?></p>
                    
                </div>
            </div>
            
        </footer>
    	<?php wp_footer(); ?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js" language="javascript"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js" language="javascript"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/flexslider.js" language="javascript"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js" language="javascript"></script>
    </body>
</html>