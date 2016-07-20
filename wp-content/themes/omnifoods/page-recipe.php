<?php /*TEMPLATE NAME: Recipe Page */ ?>
<?php get_header(); ?>
<section id="menu">
<div class="container">
	<div class="jumbotron">
		<h1 class="text-center"><i class="<?php echo get_field('recipe_icon'); ?>"></i><?php echo get_field('recipe_header'); ?></h1>
	</div>
</div>
	<div class="row">
	<?php $loop = new Wp_Query(array('post_type' => 'myrecipe', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
	<?php while($loop->have_posts()) : $loop->the_post(); $excerpt = get_the_excerpt(); ?>
		<article class="dish col-sm-4">
			<div class="thumbnail">
				<?php the_post_thumbnail(); ?>
				<h3><?php the_title(); ?></h3>
				<p><?php echo substr($excerpt, 0, 140); ?><a href="item_detail.php"> continue &raquo;</a></p>
			</div>
		</article>
	<?php endwhile; wp_reset_postdata(); ?>
	</div>
</section>
<?php get_footer(); ?>
