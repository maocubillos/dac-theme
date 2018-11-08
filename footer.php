<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dac
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php
			wp_nav_menu( array(
				'menu_id'        => 'footer',
				'menu_class'	 	=> 'nav footer-nav',
			) );
		?>
		<strong class="slogan"><span class="initial-quote"></span>Statistics is the grammar of science”</strong>
		<small class="site-info">
			<a href="<?php echo esc_url( __( 'http://ciento3.com/', 'dac-colombia' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'dac-colombia' ), 'Ciento3' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'dac-colombia' ), 'dac-colombia', '<a href="http://ciento3.com">Ciento3</a>' );
				?>
		</small><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
