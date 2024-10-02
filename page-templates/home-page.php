<?php
/*
Template Name: Flexigrow Home Page
*/

wp_head();

?>

<meta name="viewport" content="width=device-width, initial-scale=1">


<main class="bg-black">
  <?php get_template_part('template-parts/home-page/section', 'masthead'); ?>
  <?php get_template_part('template-parts/home-page/section', 'growth'); ?>
  <?php get_template_part('template-parts/home-page/section', 'simpleway'); ?>
  <?php get_template_part('template-parts/home-page/section', 'tools'); ?>
  <?php get_template_part('template-parts/home-page/section', 'business'); ?>
  <?php get_template_part('template-parts/home-page/section', 'testimonial'); ?>

  <div class="h-[1000px]"></div>
</main>