<?php 

/**
*
* This is the default footer for the Basis parent theme
*
*/

?>

		<footer role="contentinfo">
		
			<div id="inner_footer" class="clearfix">
			  
			  <div id="primary_footer_widget" role="complementary">

          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('primary_footer_widget')) : else : ?>

        		<!-- This content displays if there is no primary footer widget defined -->

        		<div class="help">
        			<p>Please <a href="<?php echo home_url(); ?>/wp-admin/widgets.php">activate</a> some Widgets for the Primary Footer Widget.</p>
        		</div>
        		
        	<?php endif; ?>
        		
        </div><!-- End #primary_footer_widget -->
        		
			</div> <!-- end #inner_footer -->
			
		</footer> <!-- end footer -->
	
	</div> <!-- end #page_wrap -->
	
	<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>
