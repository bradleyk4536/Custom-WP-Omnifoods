<!--MODIFIED SINGLE.PHP TO GO TO SINGLE CUSTOM PAGES-->
<?php if(have_posts()) : the_post(); rewind_posts(); ?>
<?php endif; ?>
<?php if('myrecipe' == get_post_type()) : ?>
	<?php include(TEMPLATEPATH . '/single-recipe.php')?>
<?php endif; ?>
