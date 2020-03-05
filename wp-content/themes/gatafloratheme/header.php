<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site"><!-- #page -->
	<header id="masthead" class="site-header">
		<div class="red-logo">
			<img class="small-logo" src="<?php echo get_template_directory_uri(); ?>/resources/white-small-logo.png" alt="">
		</div>
		<div class="digital-factory">
			<img class="small-logo" src="<?php echo get_template_directory_uri(); ?>/resources/digital-factory.png" alt="">
		</div>
		<div id="main-menu" class="menu" onmouseover="showMenu()" onmouseleave="hideMenu()">
			<img id="menu-image-bars" class="menu-image open small-logo" src="<?php echo get_template_directory_uri(); ?>/resources/menu.png" alt="">
			<img id="menu-image-x" class="menu-image closed small-logo" src="<?php echo get_template_directory_uri(); ?>/resources/x.png" alt="">
			<div id="main-hidden-menu" class="hidden-menu">
				<div class="digital-factory-menu">
					<img class="small-logo" src="<?php echo get_template_directory_uri(); ?>/resources/digital-factory.png" alt="">
				</div>
				<ul class="main-menu-list">
					<li class="main-menu-item">Desarrollo Web</li>
					<li class="main-menu-item">Estrategia RRSS</li>
					<li class="main-menu-item">Diseño & Creatividad</li>
					<li class="main-menu-item">Branding Digital</li>
				</ul>
			</div>
		</div>
	</header><!-- #masthead -->
    <div id="content" class="site-content">