<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title() ?> </title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">


</head>
<body>

<header>
	<div class="logo_area">

		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #primary-sidebar -->


  	<?php wp_nav_menu(array('menu' => "Top Menu")); ?>

		<?php
			if(has_nav_menu('top')): ?>

		<?php endif; ?>



	</div> <!--end of div class="logo_area" -->





</header>
