<?php

/**
*
* This is the default header for the Basis parent theme
*
* The majority of what you would usually see in the <head> section of a theme
* has been moved to /library/plugins/basis.php. All of the CSS and all of the JavaScript
* are loaded dynamically from there using wp_enqueue_style() and wp_enqueue_script().
* The favicon and rss feeds are loaded from there as well.
*
* This header file is mainly responsible for setting the proper <html> attributes and
* and classes to make hooking into older browser easier from CSS. It also writes out
* a nice title if you're not using an SEO plugin.
*
*/

?>

<!DOCTYPE html>  
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
  
  <!-- meta info -->
  <meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- site title -->
	<title>
  	<?php if (is_category()) {
  		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo('name');
  	} elseif (is_tag()) {
  		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo('name');
  	} elseif (is_archive()) {
  		wp_title(''); echo ' Archive | '; bloginfo('name');
  	} elseif (is_search()) {
  		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo('name');
  	} elseif (is_home()) {
  		bloginfo('name'); echo ' | '; bloginfo('description');
  	} elseif (is_404()) {
  		echo 'Error 404 Not Found | '; bloginfo('name');
  	} elseif (is_single()) {
  		wp_title('');
  	} else {
  		echo wp_title(' | ', false, right); bloginfo('name');
  	} ?>
	</title>
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<div id="page-wrap">
		
		<header role="banner">
			<div id="inner-header" class="clearfix">
				<h1 id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
				<p id="description"><?php bloginfo('description'); ?></p>
				<div id="custom-header-img"></div>
			</div> <!-- end #inner-header -->
		</header> <!-- end header -->
		
		<nav role="navigation" class="clearfix">
			<?php // Only the primary menu is enabled by default. Uncomment the first line to enable the secondary menu
			  basis_primary_menu();
			  basis_secondary_menu();
			?>
		</nav> <!-- end navigation -->
