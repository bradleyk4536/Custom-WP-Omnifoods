<section id="call_to_action">
	<div class="container">
		<div class="section_header">
		<?php if(!empty(get_field('plan_icon'))) : ?>
			<i class="<?php echo get_field('plan_icon'); ?> section_icon"></i>
		<?php endif; ?>

			<h2><?php echo get_field('plan_header'); ?></h2>

		<?php if(!empty(get_field('plan_description'))) : ?>
			<p class="section_intro_text"><?php echo get_field('plan_description'); ?></p>
		<?php endif; ?>

		</div>
		<div class="row">

		<?php $loop = new Wp_Query( array('post_type' => 'plans', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
		<?php while($loop->have_posts()) : $loop->the_post(); ?>
			<div class="col-sm-4">
				<div class="plan-box">
				<div>
					<h3><?php the_title(); ?></h3>
					<p><span><?php the_field('plan_price'); ?> / <?php the_field('price_duration'); ?></span></p>
<!--		ADDED EMPTY SPACE IF NO DESCRIPTION IS PROVIDED			-->
				<?php if(!empty(get_field('plan_description'))) : ?>
					<p><?php the_field('plan_description'); ?></p>
				<?php else: ?>
					<p>&emsp;</p>
				<?php endif; ?>
				</div>
				<div>
					<ul>
                <li><i class="<?php the_field('plan_icon_1'); ?> icon-small"></i><?php the_field('plan_benefit_1'); ?></li>
                <li><i class="<?php the_field('plan_icon_2'); ?> icon-small"></i><?php the_field('plan_benefit_2'); ?></li>
                <li><i class="<?php the_field('plan_icon_3'); ?> icon-small"></i><?php the_field('plan_benefit_3'); ?></li>
<!--                ADDED EMPTY SPACE IF LAST BENEFIT IS EXCLUDED INORDER TO MAINTAIN FORMATING -->
            <?php if(!empty(get_field('plan_icon_4')) || !empty('plan_benefit_4')) : ?>
                <li><i class="<?php the_field('plan_icon_4'); ?> icon-small"></i><?php the_field('plan_benefit_4'); ?></li>
            <?php else : ?>
                <i>&emsp;</i>
            <?php endif; ?>
                </ul>
				</div>
				<div><a href="#" class="btn <?php the_field('call_action_button'); ?> btn-lg">Sign up now</a></div>
				</div>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>

		</div>
	</div>
</section>
