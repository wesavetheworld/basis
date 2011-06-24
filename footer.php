<?php 

/**
*
* This is the default footer for the Basis parent theme
*
*/

?>

		<footer role="contentinfo">
		
			<div id="inner-footer">
			  
			  <div id="footer-widget-1" role="complementary">

          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-1')) : else : ?>

        		<!-- This content shows up if there are no widgets defined in the backend. -->

        		<div class="help">
        			<p>Please <a href="<?php echo home_url(); ?>/wp-admin/widgets.php">activate</a> some Widgets for Footer Widget 1.</p>
        		</div>
        		
        	<?php endif; ?>
        		
        </div><!-- End #footer-widget-1 -->
        		
        <div id="footer-widget-2" role="complementary">

      	  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-2')) : else : ?>

        		<!-- This content shows up if there are no widgets defined in the backend. -->

        		<div class="help">
        			<p>Please <a href="<?php echo home_url(); ?>/wp-admin/widgets.php">activate</a> some Widgets for Footer Widget 2.</p>
        		</div>
        		
        	<?php endif; ?>
        	
        </div><!-- End #footer-widget-2 -->
        
        <div id="footer-widget-3" role="complementary">
        		
      	  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-3')) : else : ?>

        		<!-- This content shows up if there are no widgets defined in the backend. -->

        		<div class="help">
        			<p>Please <a href="<?php echo home_url(); ?>/wp-admin/widgets.php">activate</a> some Widgets for Footer Widget 3.</p>
        		</div>
        		
        	<?php endif; ?>
        	
        </div><!-- End #footer-widget-3 -->
			
			</div> <!-- end #inner-footer -->
			
		</footer> <!-- end footer -->
	
	</div> <!-- end #page-wrap -->
	
	<?php wp_footer(); // js scripts are inserted using this function ?>
	
	<!-- Insert Analytics -->
	
	<!-- End Analytics -->

</body>

</html>