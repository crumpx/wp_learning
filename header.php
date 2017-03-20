<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content='width=device-width'>
	<title><?php bloginfo('name'); ?></title>
	<!-- put style.css imports in function.php -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="container">

<!-- Site header -->
<header class="site-header">
<h1><a href=" <?php echo home_url();?> "></a><?php bloginfo('name');?></h1>
<h5><?php bloginfo('description') ?></h5>
	<!-- change above information in wp backend -->
	<!-- https://www.youtube.com/watch?v=AShql_Ap1Yo&list=PLpcSpRrAaOaqMA4RdhSnnNcaqOVpX7qi5&index=4 -->
	<!-- add navigation menu -->
	<nav class="site-nav">
		<!-- use wp to include nav_menu -->
		<?php 
			$args = array(
				'theme_location' => "primary"
				);
		 ?>
		<?php wp_nav_menu( $args ); ?> 
	</nav>
</header>
	


