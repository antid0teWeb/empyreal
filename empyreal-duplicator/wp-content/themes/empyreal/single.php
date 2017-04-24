<?php get_header(); ?>
<div class="holder">
    <div class="container inner-page">
        
		<?php 
		if( have_posts() ) {
			while( have_posts() ) {
				the_post(); ?>
                <h4><?php the_title(); ?></h4>
               	<?php the_content();
			}
		}
        ?>
        
    </div>
</div>
<?php get_footer(); ?>