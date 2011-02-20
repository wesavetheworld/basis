<?php

/**
*
* This the the template file for displaying our sidebar
*
*/

?>

<div id="sidebar" class="sidebar col300 clear" role="complementary">

	<?php if ( ! is_active_sidebar( 'primary-sidebar' ) ) ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
		
		<div class="help">
			<p>Please activate some Widgets for Sidebar 1.</p>
		</div>


	<?php if ( ! is_active_sidebar( 'secondary-sidebar' ) ) ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
		
		<div class="help">
			<p>Please activate some Widgets for Sidebar 2.</p>
		</div>

</div>