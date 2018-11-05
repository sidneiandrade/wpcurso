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
					<div class="logo col-xl-9 col-sm-7 col-6">LOGO</div>
					<div class="search col-xl-3 col-sm-5 col-6 text-right"><?php get_search_form(); ?></div>			
				</div>
			</div>
		</section>
		<section class="menu-area">
			<div class="container">
				<div class="row">
					<nav class="main-menu col-md-8">
						<?php 
						wp_nav_menu( 
							array( 
								'theme_location' => 'my_main_menu' 
							) 
						); 
						?>
					</nav>
					<section class="social-media-icons col-md-4 col-12 text-right">Media Social</section>					
				</div>
			</div>
		</section>
	</header>