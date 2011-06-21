<?php

/**
*
* This is the default header for the Basis parent theme
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
  	}  elseif (is_404()) {
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

	<div id="container" class="fixed-container">
		
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
