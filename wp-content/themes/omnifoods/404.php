<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Omnifoods
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!--DYNAMIC BACKGROUND IMAGE-->
<?php $image_url = wp_get_attachment_url( get_post_thumbnail_id( $post-> ID ) ); ?>

<?php if(has_post_thumbnail()) : // CHECK FOR LOADED IMAGE IF EXISTS LOAD IT ?>
	<section style="background-image: linear-gradient(rgba(78, 78, 78, 0.7), rgba(78, 78, 78, 0.7)), url('<?php echo $image_url; ?>'); background-size: cover; background-attachment: fixed;">

<?php else : //NO LOADED IMAGE SO USE THE FALLBACK IMAGE IN ASSETS FOLDER ?>
	<section error-404 not-found id="hero" data-type="background" data-speed="3">
<?php endif; ?>
		<div class="container clear-fix">
			<div class="row">
				<div class="col-sm-5">
					<img class="hero-image img-responsive" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo-white.png" alt="">
				</div>
				<div class="hero-text col-sm-7">
	<!-- USING GENERAL SETTING TAGLINE ENTRY -->
				<h2 class="page-title"><?php esc_html_e( 'Oops 404! That page can&rsquo;t be found.', 'omnifoods' ); ?></h2>
				</div>
			</div>
		</div>
	</section><!-- .error-404 -->
	<section id="get_food_fast">
	<div class="container">
		<div class="section_header">
				<h2>Don't worry be happy, lets get you back on track!</h2>
		</div>
		<div class="container">
			<div class="row" id="primary">
				<main id="content" class="col-sm-12" role="main">
		<div class="col-sm-8">
				<div class="error-404 not-found">
					<div class="page-content">
<!--					PLANS-->
						<h3>Were you looking for a plan</h3>
		<?php $loop = new Wp_Query( array('post_type' => 'plans', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
		<?php while($loop->have_posts()) : $loop->the_post(); ?>
			<div class="col-sm-4">
				<div class="plan-box">
				<div>
					<h3><?php the_title(); ?></h3>
					<p><span><?php the_field('plan_price'); ?> / <?php the_field('price_duration'); ?></span></p>
				</div>
				<div>
				</div>
				<div><a href="#" class="btn <?php the_field('call_action_button'); ?> btn-lg">Sign up now</a></div>
				</div>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
				<p>&emsp;</p>
				<hr>
				<h3>... or may be our popular menu</h3>
					</div>
<!--					MENU -->
				<div class="widget text-center">
					<a href="recipe" class="btn btn-ghost btn-lg">See our menu</a>
				</div>
				</div>
			</div>
<!--				SIDE BAR-->
					<aside class="col-sm-4">
						<?php get_sidebar(); ?>
					</aside>
				</main>
			</div>
			</div>
		</div>
</section>
<?php get_footer(); ?>
