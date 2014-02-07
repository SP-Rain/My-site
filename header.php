<!doctype html>
<html lang="ru">
<head>
	<title>Rainy site</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/normalize.css">
	<meta charset="utf-8">
</head>
<body>


<div class="top">
	<div class="greeting">It's Rain again...</div>
</div>

<div class="wrapper">
	<?php
		$args = array(
		'menu'				=> 'main menu',
		'container'			=> 'nav',
		'container_class'	=> '',
		'before'			=> '',
		'after'				=> '',
		'depth'				=> '0'
		);
		wp_nav_menu( $args ); 
	?> 

<?php wp_head(); ?>
<!-- <-header-> -->
