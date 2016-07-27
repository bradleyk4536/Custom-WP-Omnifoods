<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Omnifoods
 */

?>

<?php wp_footer(); ?>

<!-- OMNIFOODS CUSTOM FOOTER -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<a class="navbar-brand" href="#"><i class="ion-android-restaurant"></i> Omnifoods</a>
			</div>
			<div class="footer_nav col-sm-5">

				<?php
wp_nav_menu( array(
	'theme_location'  => 'footer',
	'container' 		=> 'nav',
	'menu_class' 		=> 'list-unstyled list-inline'
));
?>
			</div>
			<div class="col-sm-4">
			<p class=" copy-author">&copy; <?php echo date('Y') . ' '; the_author_meta('user_url'); ?></p>
			</div>
		</div>

	</div>
</footer>
		<!--Core javascript files for bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/bootstrap.min.js"></script>
	 <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery.waitforimages.js" type="text/javascript"></script>
	 <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery.isotope.min.js" type="text/javascript"></script>
	 <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/stellar.js" type="text/javascript"></script>
	 <script>(function($) {$(function() {if ($('body').css('color') !== 'rgb(51, 51, 51)') {$('head').prepend('<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bootstrap.min.css">');}});})(window.jQuery);</script>
	 <script>(function($){$('body').append('<div id="check" class="fa">');var check=$('#check');if(check.css('display')!=='inline-block'){$('head').prepend('<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/font-awesome.min.css">');}check.remove();})(window.jQuery)</script>
	  <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/custom-scripts.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'template_directory' )?>/assets/js/main.js"></script>

</body>
</html>
