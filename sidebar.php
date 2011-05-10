<?php

/**
*
* This the the template file for displaying our sidebar
*
*/

?>

<div id="sidebar" class="sidebar grid-4 clearfix" role="complementary">

	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('primary-sidebar')) : else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
		
		<div class="help">
			<p>Please <a href="<?php echo home_url(); ?>/wp-admin/widgets.php">activate</a> some Widgets for your Primary Sidebar.</p>
		</div>
    
  <?php endif; ?>

	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('secondary-sidebar')) : else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
		
		<div class="help">
			<p>Please <a href="<?php echo home_url(); ?>/wp-admin/widgets.php">activate</a> some Widgets for your Secondary Sidebar.</p>
		</div>
    
  <?php endif; ?>

</div>