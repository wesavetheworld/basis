<!-- The HTML in this file creates the structure of the administration page -->

<div class="wrap">
  
  <div id="icon-themes" class="icon32"><br /></div>
  
	<h2>Basis Theme Options</h2>
	
	<p>The various options below have been built into the Basis Theme Framework to enhance your experience.<br />
	  If you need help with any of them simply click on the help tab in the upper right hand corner of this page.</p>

  <form method="post" action="options.php">
	  
	  <?php
      // settings_fields('basis-admin-options');
      // do_settings('basis-admin-options');
	  ?>
	  
	  <hr />
	  
	  <h3 class="title">Header Options</h3>
	  
	  <div id="basis_header_options" class="tool-box">
      <p>Options specific to controlling what is and is not included in the header go here...</p>
    </div><!-- end #basis_header_options -->
    
    <hr />
    
    <h3 class="title">Footer Options</h3>
	  
	  <div id="basis_footer_options" class="tool-box">
      <p>Options specific to controlling what is and is not included in the footer go here...</p>
    </div><!-- end #basis_footer_options -->
    
	  <p class="submit">
	    <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
	  </p>
	  
	</form>

</div><!-- end .wrap -->