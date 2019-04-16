<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="yandex-verification" content="be8248c4efd0d13a" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body>

<div id="wrapper">
		<header id="header">
			<div class="container">
				<div class="logo"><?php the_custom_logo( $blog_id ); ?></div>
				<nav id="nav">
					<div class="opener-holder">
						<a href="#" class="nav-opener"><span></span></a>
					</div>
					<a href="javascript:" class="btn btn-primary rounded">Заказать	</a>
					<div class="nav-drop">
						<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => false)); ?>
						<div class="drop-holder visible-sm visible-xs">
							<span>Мы в</span>
							<ul class="social-networks">
								<li><a class="fa fa-github" href="#"></a></li>
								<li><a class="fa fa-twitter" href="#"></a></li>
								<li><a class="fa fa-facebook" href="#"></a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
	<section class="visual">
		<div class="container">
			<div class="text-block">
				<div class="heading-holder">
					<h1><?php bloginfo('description'); ?></h1>
				</div>
				<p class="tagline">Закажи услугу и кайфуй</p>
				<span class="info">работаем 24/7</span>
			</div>
		</div>
		<img src="<?php echo get_header_image(); ?>" alt="<?php echo get_bloginfo('title'); ?>" class="bg-stretch">
	</section>