<?php /*TEMPLATE NAME: Recipe Page */ ?>
<?php get_header(); ?>
<section id="menu">
<div class="container">
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="jumbotron">
			<h1 class="text-center">
				<i class="<?php echo get_field('recipe_icon'); ?> "></i> <?php echo get_field('recipe_header'); ?>
			</h1>
		</div>
	</div>
</div>
<!--DISPLAY NAVIGATION CONTROLS-->
<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default text-center">
					<div class="panel-body">
						<div class="proj">
							<div id="filters">
								 <a href="#" data-filter="*" class="active btn btn-default">Show All</a>
								 <a href="#" data-filter=".beef" class="btn  btn-default">Beef</a> <a href="#" data-filter=".chicken" class="btn  btn-default">Chicken</a>
								 <a href="#" data-filter=".pizza" class="btn  btn-default">Pizza</a>
								 <a href="#" data-filter=".dessert" class="btn  btn-default">Dessert</a>
								 <a href="#" data-filter=".soup" class="btn  btn-default">Soup</a>
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
		<div class="box col-xs-6 col-md-3 col-sm-3 col-lg-3 <?php echo get_field( 'menu_filter' ); ?>">
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
