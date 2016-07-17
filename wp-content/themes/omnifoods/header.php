<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Omnifoods
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- CUSTOM LINKS TO CSS AND OTHER RESOURCES -->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
<!--	FONT AWESOME ICONS-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">
<!--		ION ICON-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ionicons-2.0.1/css/ionicons.min.css">
<!--	 GOOGLE FONTS-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

<!--	 CUSTOM STYLING-->
		 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		 <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		 <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'omnifoods' ); ?></a>

<!-- CUSTOM THEME NAVIGATION BAR FOR OMNIFOODS-->
	<header class="site-header" role="banner"><!--	NAVBAR-->
	<div class="navbar-wraper">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  <div class="container-fluid">
			 <!-- Brand and toggle get grouped for better mobile display -->
			 <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><i class="ion-android-restaurant"></i> <?php bloginfo( 'name' ); ?></a>
			 </div><!-- Collect the nav links, forms, and other content for toggling -->

<!-- WORDPRESS NAVIGATION STYLE MENU -->
<!-- NOTE IF THE MENU (WP ADMIN AREA) IS NOT SET, THEN THE 'menu_class' IS APPLIED TO THE CONTAINER. IN OTHER WORDS IT OVERWRITES THE container_class.-->
<?php
wp_nav_menu( array(
	'theme_location'  => 'primary',
	'container' 		=> 'nav',
	'container_class' => 'navbar-collapse collapse',
	'menu_class' 		=> 'nav navbar-nav navbar-right'
));
?>
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
</header>
