<section id="testimonial">
	<div class="container">
		<?php if(!empty(get_field('testimonial_icon'))) : ?>
			<i class="<?php echo get_field('testimonial_icon'); ?> section_icon"></i>
		<?php endif; ?>

			<h2><?php echo get_field('testimonial_header'); ?></h2>

		<?php if(!empty(get_field('testimonial_description'))) : ?>
			<p class="section_intro_text"><?php echo get_field('testimonial_description'); ?></p>
		<?php endif; ?>

		<div class="row">

	<?php
				$loop = new WP_Query( array('post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC' ));
			?>

			<?php while( $loop->have_posts()) : $loop->the_post(); ?>

				<div class="col-sm-4">
				<cite>

			<?php if(has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(array(45, 45)); ?>
			<?php endif; ?>
			<?php the_title(); ?>

				</cite>
				<blockquote>

			<?php the_content(); ?>

				</blockquote>

			</div>

			<?php endwhile; wp_reset_query(); ?>

		</div>
	</div>
</section>
