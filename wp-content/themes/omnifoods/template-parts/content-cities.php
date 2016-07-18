<section id="cities">
	<div class="container">
	<div class="section_header">

		 <?php if(!empty(get_field('city_icon'))) : ?>
				<i class="<?php echo get_field('city_icon'); ?> section_icon"></i>
		 <?php endif; ?>

			 <h2><?php echo get_field('city_header'); ?></h2>

		 <?php if(!empty(get_field('city_description'))) : ?>
				<p class="section_intro_text"><?php echo get_field('city_description'); ?></p>
		 <?php endif; ?>

		</div>

		<div class="row">
		<?php $loop = new Wp_Query( array('post_type' => 'cities', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

		<?php while($loop->have_posts()) : $loop->the_post(); $image = get_field('city_image'); ?>

				<div class="col-sm-3">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					<h3><?php the_field('city_name'); ?></h3>
					<div class="city-feature">
						<i class="<?php the_field('benefit_icon1'); ?> icon-small"></i>
                        <?php the_field('city_benefit1'); ?>
					</div>
					<div class="city-feature">
						<i class="<?php the_field('benefit_icon2'); ?> icon-small"></i>
                        <?php the_field('city_benefit2'); ?>
					</div>
					<div class="city-feature">
						<i class="<?php the_field('media_icon'); ?> icon-small"></i>
                        <a href="#" class="fmt-links"><?php the_field('media_url'); ?></a>
					</div>
				</div>

		<?php endwhile; wp_reset_query(); ?>

			</div>
	</div>
</section>
