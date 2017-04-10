<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wigging_out
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p>&copy; <?php bloginfo( 'name' ); ?> 2017<span class="sep"> | </span> Developed by: <a href="https://seasideconnection.com" rel="designer">Chris Gatherer</a><?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'wiggin_out' ), 'wiggin out', '<a href="https://seasideconnection.com" rel="designer">Chris Gatherer</a>' ); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.js"></script> <!-- jQuery-2.1.1 -->
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script> <!-- WOW JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script> <!-- Main JS -->

<?php wp_footer(); ?>

</body>
</html>
