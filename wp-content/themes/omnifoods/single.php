<!--MODIFIED SINGLE.PHP TO GO TO SINGLE CUSTOM PAGES-->
<?php if(have_posts()) : the_post(); rewind_posts(); endif; ?>

<?php
	switch(get_post_type()) :
		case 'myrecipe':
			include(TEMPLATEPATH . '/single-recipe.php');
		break;
	endswitch;
?>
