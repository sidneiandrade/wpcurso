<article <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_post_thumbnail( array( 275, 275 ) ); ?>
	<div class="meta-info">
		<p><strong><?php _e('Published:', 'wpcurso'): ?></strong> <?php echo get_the_date(); ?><br>
		<strong><?php _e('Author:', 'wpcurso'); ?></strong> <?php the_author_posts_link(); ?></p>
	</div>
	<?php the_excerpt(); ?>
	<br>
	<div class="row">
		<div class="col-sm-6">
			<p><?php the_tags( __('Tags: ', 'wpcurso'), ', ' ); ?></p>
		</div>
		<div class="col-sm-6 text-right">
			<a class="btn btn-dark" href="<?php the_permalink(); ?>" ><?php _e('Continue reading', 'wpcurso'); ?></a>
		</div>
	</div>
	<br>
	<hr>
</article>