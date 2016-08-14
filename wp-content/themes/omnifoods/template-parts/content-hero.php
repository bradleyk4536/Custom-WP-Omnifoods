<!--DYNAMIC BACKGROUND IMAGE-->
<?php $image_url = wp_get_attachment_url( get_post_thumbnail_id( $post-> ID ) ); ?>

<?php if(has_post_thumbnail()) : // CHECK FOR LOADED IMAGE IF EXISTS LOAD IT ?>
	<section style="background-image: linear-gradient(rgba(78, 78, 78, 0.7), rgba(78, 78, 78, 0.7)), url('<?php echo $image_url; ?>'); background-size: cover; background-attachment: fixed;">

<?php else : //NO LOADED IMAGE SO USE THE FALLBACK IMAGE IN ASSETS FOLDER ?>
	<section id="hero" data-type="background" data-speed="3">
<?php endif; ?>

	<div class="container clear-fix">
		<div class="row">
			<div class="col-sm-5 visible-md visible-lg">
				<img class="hero-image img-responsive" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo-white.png" alt="">
			</div>
			<div class="hero-text col-md-7">
<!-- USING GENERAL SETTING TAGLINE ENTRY -->
			<h1><?php bloginfo( 'description' ); ?></h1>
			<h2><?php echo get_post_meta(11, 'sub_text', true) ?></h2>
			<a href="#" class="btn btn-full js--scroll-to-plans">I&#39;m hungry</a>
<!--			<a href="#" class="btn btn-ghost js--scroll-to-get-food-fast">Show Me More</a>-->
			<a href="#" class="btn btn-ghost" data-toggle="modal" data-target="#contact_modal">Contact Omnifoods</a>
			</div>
		</div>
	</div>
</section>
<section id="newsletter">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-6">

				<p class="lead"><strong><?php echo get_post_meta(11, 'newsletter_text', true); ?></strong></p>
			</div>
			<div class="col-sm-4">
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newsletter_modal"><?php echo get_post_meta(11, 'newsletter_button_text', true); ?></button>
			</div>
		</div>
	</div>
</section>
