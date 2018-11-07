<article <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_post_thumbnail( array( 275, 275 ) ); ?>
	<div class="meta-info">
		<p><strong><?php _e( 'Published:', 'wpcurso' ); ?></strong> <?php echo get_the_date(); ?><br>
		<strong><?php _e( 'Author:', 'wpcurso'); ?></strong> <?php the_author_posts_link(); ?><br>
		<strong><?php _e('Categories:', 'wpcurso'); ?></strong> <?php the_category( ' ' ); ?><br>
		<?php the_tags( '<strong>Tags:</strong> ', ', ' ); ?></p>
	</div>
	<?php the_content(); ?>
</article>