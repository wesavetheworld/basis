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
define('HEADER_IMAGE_WIDTH', 980); // use width and height appropriate for your theme
define('HEADER_IMAGE_HEIGHT', 200);

// If you don't want to allow changing the header text color
//define('NO_HEADER_TEXT', true );    // change first define above to: define('HEADER_TEXTCOLOR', '');

// gets included in the site header
function header_style() {
  ?><style type="text/css">
      header[role=banner] {
          background: url(<?php header_image(); ?>);
          text-indent: -9999em;
          width: 980px;
          height: 200px;
          margin: 0 auto;
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