<?php get_header(); ?>
<!-- <div class="holder">
    <div class="container inner-page">
    	<div class="row">
        	<div class="col-sm-9">
                <h3><?php single_cat_title('',true); ?></h3><br />
                <?php 
                if( have_posts() ) {
                    while( have_posts() ) {
                        the_post(); ?>
                        <div class="blog-category clearfix">
                            <h5><?php the_title(); ?></h5>
                            <p><em>Posted on : <?php the_time('d M Y'); ?> | <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></em></p>
                            <?php if( has_post_thumbnail() ) { the_post_thumbnail('medium',array('class'=>'img-responsive pull-left img-thumbnail marr')); } ?><?php the_content(); ?>
                        </div>
                        <?php comments_template(); ?>
                    <?php }
                }
                ?>
            </div>
            <div class="col-sm-3">
            	<?php get_sidebar(); ?>
            </div>
        </div>
        
    </div>
</div>
<?php get_footer(); ?>