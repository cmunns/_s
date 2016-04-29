<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">
			<div class="site-info text-center">
				<div>
					<a href="http://www.hoganassessments.com/"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/hogan_logo_black.png'?>"/></a>
				</div>
				<p>© 2016 Hogan Assessment Systems Inc.
					<br>
					<a href="http://www.hoganassessments.com/?q=content/privacy-policy">Privacy Policy</a>
					<span class="sep"> | </span>
					<a href="http://www.hoganassessments.com/?q=content/legal-policy">Legal Policy</a>
				</p>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>