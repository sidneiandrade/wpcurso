<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<div class="archive col-md-8">
                            <?php 
                            
                            the_archive_title( '<h1 class="archive-title">', '</h1>' );
                            the_archive_description( '<p>', '</p>' );

							// Se houver algum post
							if( have_posts() ):
								// Enquanto houver posts, mostre-os pra gente
								while( have_posts() ): the_post();

							?>
							<?php get_template_part( 'template-parts/content', 'archive' ); ?>
							
							<?php 
								endwhile;
                            
                                the_posts_pagination(
                                    array(
                                        'prev_text' => 'Previous',
                                        'next_text' => 'Next',
                                        'screen_reader_text' => ' '
                                    )
                                );
                        
							else:
							?>
							 <p>There's nothing yet to be displayed...</p>
							<?php endif; ?>

						</div>	
						<?php get_sidebar('blog'); ?>					
					</div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>