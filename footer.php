<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cookiebasic
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer cookie-footer">
	<div class="container-fluid">
		<div class="row row-1">
			<div class="cookie-footer-col col-12 col-md-4">
				<h3>COL 1</h3>
				<p>
					INFORMATION 1
				</p>
			</div>
			<div class="cookie-footer-col col-12 col-md-4">
				<h3>COL 2</h3>
				<p>
					INFORMATION 2
				</p>
			</div>
			<div class="cookie-footer-col col-12 col-md-4">
				<h3>COL 3</h3>
				<p>
					INFORMATION 3
				</p>
			</div>
		</div>
	</div>

	<div class="site-info">
<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'cookie-basic'), 'Cookie Basic', '<a target="_blank" href="https://juan-dev.com">The Cookie Dev</a>');
?>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>