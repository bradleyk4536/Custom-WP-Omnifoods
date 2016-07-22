<?php get_header(); ?>
<section id="item_detail">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<article>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
					<div class="dish_image">
						<div class="thumbnail">
						<?php if(has_post_thumbnail()) : the_post_thumbnail(array(400, 400)); endif; ?>
						<hr>
						<p><?php the_content(); ?></p>
						</div>
					</div>

				<?php if(!empty(get_field('header_1')) && !empty('instructor_1')) :?>
					<div class="ingredients">
						<h3><?php the_field('header_1'); ?></h3>
						<?php the_field('instruction_1'); ?>
					</div>
				<?php endif; ?>

				<?php if(!empty('header_2') && !empty('instruction_2')) : ?>
					<div class="directions">
						<h3><?php the_field('header_2'); ?></h3>
						<?php the_field('instruction_2'); ?>
					</div>
				<?php endif; ?>

				<?php if(!empty('header_3') && !empty('instruction_3')) : ?>
					<div class="cooking">
						<h3><?php the_field('header_3'); ?></h3>
						<?php the_field('instruction_3'); ?>
					</div>
				<?php endif; ?>

				<?php if(!empty('header_4') && !empty('instruction_4')) : ?>
					<div class="serving">
						<h3><?php the_field('header_4'); ?></h3>
						<?php the_field('instruction_4'); ?>
					</div>
				<?php endif; ?>

				<?php endwhile; endif; wp_reset_postdata(); ?>
				</article>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
