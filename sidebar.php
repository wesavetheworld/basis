<?php

/**
*
* This the the template file for displaying our sidebar
*
*/

?>

<div id="sidebar" class="sidebar col300 clear" role="complementary">

	<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
		
		<div class="help">
			<p>Please activate some Widgets for Sidebar 1.</p>
		</div>


	<?php if ( ! is_active_sidebar( 'sidebar-2' ) ) ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
		
		<div class="help">
			<p>Please activate some Widgets for Sidebar 2.</p>
		</div>

</div>