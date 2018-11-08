<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dac
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dac-colombia' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-bar">
			<nav class="navbar navbar-social justify-content-end sticky-top navbar-expand-sm navbar-dark">
				<ul class="nav social-links-list">
					<li class="nav-item">
						<a class="nav-link" href="#">
							<!-- Facebook -->
							<!-- <img src="<?php echo get_template_directory_uri()?>/assets/img/facebook2.svg" alt="fb"> -->
							<svg height="24" viewBox="0 0 32 32" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M29 0h-26c-1.65 0-3 1.35-3 3v26c0 1.65 1.35 3 3 3h13v-14h-4v-4h4v-2c0-3.306 2.694-6 6-6h4v4h-4c-1.1 0-2 0.9-2 2v2h6l-1 4h-5v14h9c1.65 0 3-1.35 3-3v-26c0-1.65-1.35-3-3-3z" />
							</svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<!-- Twitter -->
							<!-- <img src="<?php echo get_template_directory_uri()?>/assets/img/twitter.svg" alt="tw"> -->
							<svg height="24" viewBox="0 0 32 32" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z" />
							</svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<!-- LinkedIn -->
							<!-- <img src="<?php echo get_template_directory_uri()?>/assets/img/linkedin.svg" alt="li"> -->
							<svg height="24" viewBox="0 0 32 32" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M29 0h-26c-1.65 0-3 1.35-3 3v26c0 1.65 1.35 3 3 3h26c1.65 0 3-1.35 3-3v-26c0-1.65-1.35-3-3-3zM12 26h-4v-14h4v14zM10 10c-1.106 0-2-0.894-2-2s0.894-2 2-2c1.106 0 2 0.894 2 2s-0.894 2-2 2zM26 26h-4v-8c0-1.106-0.894-2-2-2s-2 0.894-2 2v8h-4v-14h4v2.481c0.825-1.131 2.087-2.481 3.5-2.481 2.488 0 4.5 2.238 4.5 5v9z" />
							</svg>
						</a>
					</li>
				</ul>
				<a href="/wp-login.php" class="btn btn-login btn-secondary btn-sm">Login</a>
			</nav>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
					<?php
				else :
					?>
					<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
					<?php
				endif;
				$dac_colombia_description = get_bloginfo( 'description', 'display' );
				if ( $dac_colombia_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $dac_colombia_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dac-colombia' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'menu-1',
					'menu_id'        	=> 'primary-menu',
					'menu_class'	 	=> 'main-menu',
					'container_class'	=> 'main-menu-container navbar navbar-expand-lg navbar-light'
				) );
				?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
