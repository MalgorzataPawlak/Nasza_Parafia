<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title() ?> </title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://use.fontawesome.com/cccbcbc998.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<?php wp_head(); ?>  

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">


</head>
<body>

<header>
	<div class="logo_area">
		<!-- <p> -->
		<i class="fa fa-bars"></i>
		<!-- </p> -->

		<i class="fa fa-search" aria-hidden="true"></i>

  	<?php wp_nav_menu(array('menu' => "Top Menu")); ?>

		<?php
			if(has_nav_menu('top')): ?>

		<?php endif; ?>





  </div> <!--end of div class="logo_area" -->





</header>
