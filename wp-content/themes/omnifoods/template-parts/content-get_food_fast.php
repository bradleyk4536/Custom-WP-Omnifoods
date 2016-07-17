<section id="get_food_fast">
	<div class="container">
		<div class="section_header">
			<?php if(!empty(get_field('section_icon'))) : ?>
				<i class="<?php echo get_field('section_icon'); ?> section_icon"></i>
			<?php endif; ?>

				<h2><?php echo get_field('section_header'); ?></h2>

			<?php if(!empty(get_field('section_description'))) : ?>
				<p class="section_intro_text"><?php echo get_field('section_description'); ?></p>
			<?php endif; ?>
		</div>
		<div class="row">
				<div class="col-sm-3">
				<i class="<?php echo get_field( 'benefit_icon1' ); ?> icon-big" aria-hidden="true"></i>
				<h3><?php echo get_field('benefit_header1'); ?></h3>
				<p><?php echo get_field('description1'); ?></p>
				</div>
				<div class="col-sm-3">
				<i class="<?php echo get_field('benefit_icon2'); ?> icon-big" aria-hidden="true"></i>
				<h3><?php echo get_field('benefit_header2'); ?></h3>
				<p><?php echo get_field('description2'); ?></p>
				</div>
				<div class="col-sm-3">
				<i class="<?php echo get_field('benefit_icon3'); ?> icon-big" aria-hidden="true"></i>
				<h3><?php echo get_field('benefit_header3'); ?></h3>
				<p><?php echo get_field('description3'); ?></p>
				</div>
				<div class="col-sm-3">
				<i class="<?php echo get_field('benefit_icon4'); ?> icon-big" aria-hidden="true"></i>
				<h3><?php echo get_field('benefit_header4')?></h3>
                    <p><?php echo get_field('description4'); ?></p>
				</div>
		</div><!--end row-->
	</div><!--end container-->
	<div class="menu_button text-center">
		<a href="menu.php" class="btn btn-info btn-lg btn-color">See our menu</a>
	</div>
</section>
