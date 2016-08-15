<?php get_header(); ?>
<div class="container">
	<div id="single-post" class="row" id="primary">
		<main id="content" class="col-sm-8" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php
						if ( is_single() ) {
							the_title( '<h3 class="entry-title">', '</h3>' );
						} else {
							the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
						}
					if ( 'post' === get_post_type() ) : ?>
					<div class="post-details">
											<!--	DISPLAY AUTHOR OF A POST -->
						<i class="fa fa-user"></i><?php the_author(); ?>
											<!--  DISPLAY DATE POST ENTERED-->
						<i class="fa fa-clock-o"></i><time><?php the_date(); ?></time>
											<!--			DISPLAY THE CATEGORY -->
						<i class="fa fa-folder"></i><?php the_category(', '); ?>
											<!--			DISPLAY THE TAGS-->
						<i class="fa fa-tags"></i> <?php the_tags(); ?>
						<div class="post-comments-badge visible-md visible-lg">
											<!--			DISPLAY NUMBER OF COMMENTS-->
							<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number( 0, 1, '%'); ?></a>
						</div>			<!--			PROVIDES ABILITY TO EDIT POST-->
						<?php edit_post_link('Edit', '<i class="fa fa-pencil"></i>', ''); ?>
					</div>
					<?php endif; ?>
				</header><!-- .entry-header -->
			<!--	GET THE POST FEATURE IMAGE MAKE SURE TO TEST FIRST -->
				<?php if(has_post_thumbnail()) : ?>
					<div class="post-image text-center">
						<?php the_post_thumbnail(array(400, 400)); ?>
					</div>
				<?php endif; ?>
				<div class="post-body">
				<p><?php the_content(); ?></p>
				</div>
			</article>

<!--			If comments are open or we have at least one comment, load up the comment template.-->
	<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif ; ?>

		</main>
	<!--				SIDE BAR-->
		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>
<?php get_footer(); ?>
