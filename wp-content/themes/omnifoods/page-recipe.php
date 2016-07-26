<?php /*TEMPLATE NAME: Recipe Page */ ?>
<?php get_header(); ?>
<section id="menu">
<div class="container">
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="min-height: 1px;">
		<div class="jumbotron" style="margin-bottom: 10px;">
			<h1 class="text-center">
				<i class="<?php echo get_field('recipe_icon'); ?> "></i> <?php echo get_field('recipe_header'); ?>
			</h1>
		</div>
	</div>
</div>
<!--DISPLAY NAVIGATION CONTROLS-->
<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="min-height: 1px;">
				<div class="panel panel-default text-center">
					<div class="panel-body">
						<div class="proj">
							<div id="filters">
								 <a href="#" data-filter="*" class="active btn btn-default">Show All</a> <a href="#" data-filter=".graphics" class="btn  btn-default">Graphics</a> <a href="#" data-filter=".web" class="btn  btn-default">Web</a> <a href="#" data-filter=".ui" class="btn  btn-default">UI</a> <a href="#" data-filter=".design" class="btn  btn-default">Design</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<!--DISPLAY MEALS-->
<div class="container">
	<div class="row">
		<div id="container-folio" class="relative">
				<?php $loop = new Wp_Query(array('post_type' => 'myrecipe', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
	<?php while($loop->have_posts()) : $loop->the_post(); $excerpt = get_the_excerpt(); ?>
		<div class="box col-xs-6 col-md-4 col-sm-4 col-lg-4 graphics design" style="min-height: 1px;">
			<div class="thumbnail">
				<?php the_post_thumbnail(); ?>
				<h3><?php the_title(); ?></h3>
				<p><?php echo substr($excerpt, 0, 75) ?><a href="<?php echo get_permalink(); ?>"> ...continue &raquo;</a></p>
			</div>
		</div>
	<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</div>

</section>
<?php get_footer(); ?>
