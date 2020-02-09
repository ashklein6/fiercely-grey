<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fiercelyGrey
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer-column">
				<p>
					© Fiercely Grey
				</p>
			</div>
			<div class="footer-column">
				<h4>INFORMATION</h4>
				<ul>
					<li>
						<a href="">About</a>
					</li>
					<li>
						<a href="">FAQ</a>
					</li>
					<li>
						<a href="">Contact</a>
					</li>
				</ul>
			</div>

			<div class="footer-column">
				<h4>FOLLOW</h4>
				<ul>
					<li>
						<a href="https://www.instagram.com/fiercelygrey/">Instagram</a>
					</li>
					<li>
						<a href="https://twitter.com/fiercelygrey">Twitter</a>
					</li>
					<li>
						<a href="https://youtube.com/user/fiercelygrey">Youtube</a>
					</li>
				</ul>
			</div>

			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fiercelygrey' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'fiercelygrey' ), 'WordPress' );
				?>
			</a>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
