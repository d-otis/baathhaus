<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php esc_html(bloginfo('name')); esc_html(wp_title('//','left')); ?></title>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php esc_html(bloginfo('name')); esc_html(wp_title('//','left')); ?></title>
	<meta property="og:image" content="<?php esc_url(bloginfo('stylesheet_directory')); ?>/assets/img/Baathhaus_500x500.jpg">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a32031ea36.js"></script>
	<link rel="stylesheet" href="https://use.typekit.net/qmh2vpz.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
			<header class="text-center mb-3">
			<span class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html(bloginfo('name')); ?></a></span>
			<nav class="navbar navbar-expand-md navbar-dark bg-transparent mt-0 pt-0">
				<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html(bloginfo('name')); ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					  <?php wp_nav_menu(array(
					                  // 'menu' => 'header-left',
					                  'theme_location' => 'primary',
					                  'container' => '',
					                  'container_id' => '',
					                  // 'container_class' => 'nav-item container-class',
					                  'menu_id' => false,
					                  'before' => "<a class='nav-link'",
					                  // 'after' => "</a>",
					                  'menu_class' => 'navbar-nav',
					                  // 'depth' => 2,
					                  'fallback_cb' => 'bs4navwalker::fallback',
					                  'walker'          => new bs4navwalker()
					    )); 
					?>
				</div>
			</nav>
		</header>
		
		<?php //============HEADER SECTION END============= ?>