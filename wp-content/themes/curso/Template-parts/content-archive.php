<article <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_post_thumbnail( array( 275, 275 ) ); ?>
	<div class="meta-info">
		<p><strong>Published:</strong> <?php echo get_the_date(); ?><br>
		<strong>Author:</strong> <?php the_author_posts_link(); ?></p>
	</div>
	<?php the_excerpt(); ?>
	<br>
	<div class="row">
		<div class="col-sm-6">
			<p><?php the_tags( '<strong>Tags:</strong> ', ', ' ); ?></p>
		</div>
		<div class="col-sm-6 text-right">
			<a class="btn btn-dark" href="<?php the_permalink(); ?>" >Continue reading</a>
		</div>
	</div>
	<br>
	<hr>
</article>