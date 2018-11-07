<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="logo col-xl-9 col-sm-7 col-6">
						<?php the_custom_logo(); ?>
					</div>
					<div class="search col-xl-3 col-sm-5 col-6 text-right"><?php get_search_form(); ?></div>			
				</div>
			</div>
		</section>
		<section class="menu-area">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-expand-md navbar-light col-md-8 col-6" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<?php 
						wp_nav_menu( 
							array( 
								'theme_location' => 'my_main_menu',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(), 
							) 
						); 
						?>
					</nav>
					<section class="social-media-icons col-md-4 col-6 text-right">
					<?php if( is_active_sidebar( 'social-media' )){
								dynamic_sidebar( 'social-media' );
							}
							?>
					</section>					
				</div>
			</div>
		</section>
	</header>