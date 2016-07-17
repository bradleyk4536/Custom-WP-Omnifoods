<?php
	$sub_text 		  			= get_post_meta( 11, 'sub_text', true );
	$newsletter_text 			= get_post_meta( 11, 'newsletter_text', true);
	$newsletter_button_text = get_post_meta( 11, 'newsletter_button_text', true);
?>
<section id="hero" data-type="background" data-speed="5">
	<div class="container clear-fix">
		<div class="row">
			<div class="col-sm-5">
				<img class="hero-image img-responsive" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo-white.png" alt="">
			</div>
			<div class="hero-text col-sm-7">
<!-- USING GENERAL SETTING TAGLINE ENTRY -->
			<h1><?php bloginfo( 'description' ); ?></h1>
			<h2><?php echo $sub_text; ?></h2>
			<a href="#" class="btn btn-full">I&#39;m hungry</a>
			<a href="#" class="btn btn-ghost">Show Me More</a>
			</div>
		</div>
	</div>
</section>
<section id="newsletter">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-6">

				<p class="lead"><strong><?php echo $newsletter_text; ?></strong></p>
			</div>
			<div class="col-sm-4">
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newsletter_modal"><?php echo $newsletter_button_text; ?></button>
			</div>
		</div>
	</div>
</section>
