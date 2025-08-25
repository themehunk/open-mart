<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package  Open Mart
 * @since 1.0.0
 */ 
?>
 <?php 
   do_action( 'open_mart_before_footer' );
   do_action( 'open_mart_footer' );
   do_action( 'open_mart_after_footer' );
    ?> 
    </div> <!-- end openmart-site -->
<?php wp_footer(); ?>
</body>
</html>