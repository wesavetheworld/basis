<?php

/**
* 
* Author: Dominic Giglio
* URL: http://utadvisors.com
* 
* This is the core functions.php file for the entire Basis theme. Since Basis
* is centered around the parent/child theme paradigm it is important to remember
* that a child theme's functions.php is loaded BEFORE it's parent's. All other
* files (page templates, css, etc) will load second in the child them and
* therefore overwrite those from the parent.
* 
* Basis takes a modular approach to it's functions.php file. The majority of this
* file is used to load other files in the library folder and it's subfolders. Most
* of the plugin functionality that's included with Basis is loaded from this file
* in a modular fashion. To learn more about what is being loaded please refer to
* the specific file(s) in the library folder. They have all been heavily commented
* to help explain their specific functions.
*
* Because this file will be loaded after the child functions.php we have to check 
* each function to see if it already exists before it's called. You'll see this
* throughout the modular files that are included at various points below.
*
* If you want to disable any of the functionality from one of the modular files
* all you have to do is comment out the line that includes that file.
*
* e.g. - //include_once('library/plugins/custom-post-type.php');
* 
*/

/* Load the core basis.php file (library/plugins/basis.php)
*  This file contains general WordPress code to load core functionality
***********************************************************************************/
include_once('library/plugins/basis.php');


/* Load the navigation.php file (library/plugins/navigation.php)
*  Declares all functions necessary to get menus, sidebars & footer widgets
***********************************************************************************/
include_once('library/plugins/navigation.php');


/* Load the extras.php file (library/plugins/extras.php)
*  This file declares some fun functions to add "extra" functionality  :-)
***********************************************************************************/
include_once('library/plugins/extras.php');


/* Load the pagenavi.php file (library/plugins/pagenavi.php)
*  Built in Page Navi functionality w/out a Plugin!!
***********************************************************************************/
include_once('library/plugins/pagenavi.php');

/* Load the custom-header.php file (library/plugins/custom-header.php)
*  Setup and call all necessary functions to add custom headers
***********************************************************************************/
//include_once('library/plugins/custom-header.php');


/* Load the comments.php file (library/plugins/comments.php)
*  This file contains the the custom callback function for the comments loop
***********************************************************************************/
include_once('library/plugins/comments.php');


/* Load the randomposts.php file (library/plugins/randomposts.php)
*  This file contains the the custom code to create a random posts widget
***********************************************************************************/
include_once('library/plugins/randomposts.php');


/* Load the custom-post-type.php file (library/plugins/custom-post-type.php)
*  Declares a new custom post type including custom tags
***********************************************************************************/
//include_once('library/plugins/custom-post-type.php');


?>
