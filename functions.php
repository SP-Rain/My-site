<?php
	add_theme_support ('menus');
?>
<?php 
	function my_wp_nav_menu_args ($args=''){
	$args ['container']='';
	$args ['depth']='0';
	return $args;
}
?> <!-- this code automatically sets the value of
specified elements of $args for all the menus on the site -->