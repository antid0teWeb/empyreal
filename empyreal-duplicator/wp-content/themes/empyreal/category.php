<?php get_header(); ?>
<div class="holder">
    <div class="container inner-page">
        <h4><?php single_cat_title('',true); ?></h4><br />
        <?php 
        if( have_posts() ) {
            while( have_posts() ) {
                the_post(); ?>
                <div class="category clearfix">
                    <h5><?php the_title(); ?></h5>
                    <?php if( has_post_thumbnail() ) { the_post_thumbnail('medium',array('class'=>'img-responsive pull-left img-thumbnail marr')); } ?>
					<?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
                </div>
            <?php }
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>