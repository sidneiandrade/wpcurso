<?php get_header(); ?>
	<div class="content-area">
		<main>
			<section>

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active carousel-fade">
							<img class="d-block img-fluid" src="http://localhost:8181/wpcurso/wp-content/uploads/2018/10/perth-city-night-lights-time-lapse_4uz-m0vcke__F0000.png" alt="First slide">
							</div>
							<div class="carousel-item carousel-fade">
							<img class="d-block img-fluid" src="http://localhost:8181/wpcurso/wp-content/uploads/2018/10/perth-city-night-lights-time-lapse_4uz-m0vcke__F0000.png" alt="Second slide">
							</div>
							<div class="carousel-item carousel-fade">
							<img class="d-block img-fluid" src="http://localhost:8181/wpcurso/wp-content/uploads/2018/10/perth-city-night-lights-time-lapse_4uz-m0vcke__F0000.png" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>

			</section>
			<section class="services">
				<div class="container">
				<h1>Our Services</h1>
					<div class="row">
						<div class="col-sm-4">
							<div class="services-item">
								<?php if( is_active_sidebar( 'service-1' )){
									dynamic_sidebar( 'service-1' );
								}
								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item">
								<?php if( is_active_sidebar( 'service-2' )){
									dynamic_sidebar( 'service-2' );
								}
								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item">
							<?php if( is_active_sidebar( 'service-3' )){
								dynamic_sidebar( 'service-3' );
							}
							?>
							</div>
						</div>
					</div>
				</div>				
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						    <?php get_sidebar('home'); ?>
						<div class="news col-md-8">
							<div class="container">
								<h1>Lastest News</h1>
								<div class="row">
									<?php
									//Last Featured Loop
									$featured = new WP_Query( 'post_type=post&posts_per_page=1&cat=10,3' );
									if ( $featured->have_posts() ):
										while ( $featured->have_posts() ): $featured->the_post();
									?>
									<div class="col-12">
										<?php get_template_part( 'template-parts/content', 'featured'); ?>
									</div>
									<?php
										endwhile;
										wp_reset_postdata();
									endif;
									
									//Second News Loop
									$args = array (
										'post_type' => 'post',
										'posts_per_page' => 2,
										'category__not_in' => array( 1 ),
										'category__in' => array( 3, 10 ),
										'offset' => 1
									);
									$secondary = new WP_Query( $args );
									if ( $secondary->have_posts() ):
										while ( $secondary->have_posts() ): $secondary->the_post();
									?>
									<div class="col-sm-6">
										<?php get_template_part( 'template-parts/content', 'secondary'); ?>
									</div>
									<?php
										endwhile;
										wp_reset_postdata();
									endif;	

									?>
								</div>
							</div>
						</div>						
					</div>
				</div>				
			</section>
			<section class="map">
				<div class="container">
					<div class="row">Mapa</div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>