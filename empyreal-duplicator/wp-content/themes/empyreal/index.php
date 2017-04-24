<?php get_header(); ?>
<div class="holder">
    <div class="container inner-page">
        
		<?php 
		if( have_posts() ) {
			while( have_posts() ) {
				the_post(); ?>
                <h4><?php the_title(); ?></h4>
               	<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
			<?php }
		}
        ?>
        
    </div>
</div>
<?php get_footer(); ?>