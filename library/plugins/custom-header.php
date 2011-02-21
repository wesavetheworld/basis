<?php

/**
*
* This plugin file will setup and call all necessary functions to add custom headers
* in the admin menu of our Basis parent theme and any child themes child themes
*
*/

// define the constants needed to support custom headers
define('HEADER_TEXTCOLOR', 'ffffff');
define('HEADER_IMAGE', get_bloginfo('stylesheet_directory') . '/library/images/headers/basis-parent-header.jpg');
define('HEADER_IMAGE_WIDTH', 1000); // use width and height appropriate for your theme
define('HEADER_IMAGE_HEIGHT', 200);

// If you don't want to allow changing the header text color
//define('NO_HEADER_TEXT', true );    // change first define above to: define('HEADER_TEXTCOLOR', '');

// gets included in the site header
function header_style() {
  ?><style type="text/css">
    #inner-header #logo { float: left; }
    #inner-header p { float: right; padding: 1.5em; }
    #custom-header-img {
      background: url(<?php header_image(); ?>);
      clear: both;
      width: 1000px;
      height: 200px;
    }
  </style><?php
}

// gets included in the admin header
function admin_header_style() {
  ?><style type="text/css">
    #headimg {
      width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
      height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
    }
  </style><?php
}

add_custom_image_header('header_style', 'admin_header_style');

?>