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
			<div class="footer_nav pull-right col-sm-6">
				<nav>
					<ul>
						<li class="active"><a href="#">Home</a></li>
						<li><a href="resources.html">Resources</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="#" data-toggle="modal" data-target="#contact_modal">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</footer>
		<!--Core javascript files for bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' )?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' )?>/assets/js/main.js"></script>

</body>
</html>
