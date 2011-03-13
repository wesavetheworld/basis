<?php

/**
*
* This is the default header for the Basis parent theme
*
*/

?>

<!doctype html>  

<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
	
	<head>
		
		<meta charset="utf-8" />
		
		<title><?php wp_title(' '); ?></title>
		
		<meta name="description" content="" />
		<meta name="author" content="" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<!-- reset and parent stylesheets -->
		<!--[if (gt IE 6)|!(IE)]><!-->
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/reset.css" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
		<!--<![endif]-->
		
		<!-- scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
		<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.4.2.min.js"%3E%3C/script%3E'))</script>
		
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/header.js"></script>
		
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/ie/DOMAssistant-2.0.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/ie/selectivizr.js"></script>
		<![endif]-->
		
		<!-- wordpress head functions -->
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<?php wp_head(); ?>
		
		<!-- main stylesheet is called after wp_head so you can overwrite plugin styles if needed -->
		
		<!-- Serve our child theme's default style.css to everyone except IE6 -->
		<!--[if (gt IE 6)|!(IE)]><!-->
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<!--<![endif]-->
		
		<!-- Serve the universal IE6 css from Google Code - http://forabeautifulweb.com/blog/about/universal_internet_explorer_6_css -->
		<!--[if lt IE 7]>
		  <link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
		<![endif]-->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container" class="fluid-container">
			
			<header role="banner">
				<div id="inner-header">
					<h1 id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
					<p><?php bloginfo('description'); ?></p>
					<div id="custom-header-img"></div>
				</div> <!-- end #inner-header -->
			</header> <!-- end header -->
			
			<nav role="navigation">
				<div id="nav-container">
					<?php // Only the primary menu is enabled by default. Uncomment the first line to enable the secondary menu
					  //basis_secondary_menu();
					  basis_primary_menu();
					?>
				</div>
			</nav>
