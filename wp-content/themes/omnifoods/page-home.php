<?php
/*
Template Name: Home Page
*/
get_header();
?>
<?php get_template_part('template-parts/content', 'hero'); ?>
<?php get_template_part('template-parts/content', 'get_food_fast'); ?>
<?php get_template_part('template-parts/content', 'how_it_works'); ?>
<?php get_template_part('template-parts/content', 'cities'); ?>
<?php get_template_part('template-parts/content', 'testimonial'); ?>
<?php get_template_part('template-parts/content', 'call_to_action'); ?>
<?php get_template_part('template-parts/content', 'news_modal'); ?>
<?php get_template_part('template-parts/content', 'contact_modal'); ?>

<?php get_footer(); ?>
