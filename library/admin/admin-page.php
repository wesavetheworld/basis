<!-- The HTML in this file creates the structure of the administration page -->

<div class="wrap">
  
  <div id="icon-themes" class="icon32"><br /></div>
  
	<h2>Basis Theme Options</h2>
	
	<p>The various options below have been built into the Basis Theme Framework to enhance your experience. If you need help with any of them simply click on the help tab in the upper right hand corner of this page.</p>

  <form method="post" action="options.php">
	  <?php
      // settings_fields('basis-admin-options');
      // do_settings('basis-admin-options');
	  ?>
	  <div id="basis_header_options" class="postbox">
      <div class="handlediv" title="Click to toggle"><br></div>
      <h3 class="hndle"><span>Header Options</span></h3>
      <div class="inside">
        <p>Options specific to controlling what is and is not included in the header go here...</p>
      </div>
    </div><!-- end #basis_header_options -->
	  <p class="submit"><input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" /></p>
	</form>

</div><!-- end .wrap -->