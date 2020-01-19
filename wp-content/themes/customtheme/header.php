<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
</head>
 
<body <?php body_class(); ?>>
 

<header>
    <h1><a href="<?php echo home_url(); ?>"></a><?php bloginfo( 'name' ); ?></h1>
    
</header>
<div class="container">
	<h4 class="hdescription"><?php bloginfo( 'description' ); ?></h4>
	
	<nav class="navigation-menu">
		<?php $args=['theme_location' => 'primary']; ?>
		<?php wp_nav_menu($args); ?>
	</nav>
	<hr>