<section id="how_it_works">
	<div class="container">
		<div class="section_header">

		 <?php if(!empty(get_field('how_works_icon'))) : ?>
				<i class="<?php echo get_field('how_works_icon'); ?> section_icon"></i>
		 <?php endif; ?>

			 <h2><?php echo get_field('how_works_header'); ?></h2>

		 <?php if(!empty(get_field('how_works_description'))) : ?>
				<p class="section_intro_text"><?php echo get_field('how_works_description'); ?></p>
		 <?php endif; ?>

		</div>
		<div class="row">

		<?php
			$image = get_field('how_works_image');
			if(!empty($image)) : ?>
			<div class="col-sm-6 phone">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="app-screen js--wp-2">
			</div>
		<?php else :?>
				<div class="col-sm-6 phone"></div>
		<?php endif; ?>



			<div class="col-sm-6">
			<?php
				$counter = 0;
				$loop = new WP_Query( array('post_type' => 'how_works', 'orderby' => 'post_id', 'order' => 'ASC' ));
			?>

			<?php while( $loop->have_posts()) : $loop->the_post(); $counter++; ?>
				<div class="work-steps clearfix">
					<span><?php echo $counter ?></span>
					<p><?php the_field('instructions'); ?></p>
				</div>
			<?php endwhile; wp_reset_query(); ?>

				<a href="#" class="btn-app"><img src="<?php bloginfo( 'stylesheet_directory' )?>/assets/images/download-app-android.png" alt="Google Play"></a>
				<a href="#" class="btn-app"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/download-app.svg" alt="Apple Store"></a>
			</div>
		</div>
	</div>
</section>
