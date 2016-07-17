<?php
/*
Template Name: Home Page
*/
get_header();
?>
<!-- HEADER -->
<?php get_template_part( 'template-parts/content', 'hero' ); ?>
<!-- GET FOOD FAST -->
<?php get_template_part( 'template-parts/content', 'get_food_fast' ); ?>
<!-- HOW IT WORKS-->
<?php get_template_part( 'template-parts/content', 'how_it_works' ); ?>
<!-- CITIES -->
<?php get_template_part( 'template-parts/content', 'cities' ); ?>
<!-- TESTIMONIALS -->
<?php get_template_part( 'template-parts/content', 'testimonial' ); ?>
<!-- CALL TO ACTION -->
<?php get_template_part( 'template-parts/content', 'call_to_action' ); ?>
<!-- MODALS -->
<?php get_template_part( 'template-parts/content', 'modal'); ?>
<!-- FOOTER SECTION --<
<?php get_footer(); ?>
