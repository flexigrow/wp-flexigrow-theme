<?php
/*
Template Name: Flexigrow Home Page
*/

wp_head();

?>


<div>
  <main>
    <?php get_template_part('template-parts/home-page/section', 'masthead'); ?>
    <?php get_template_part('template-parts/home-page/section', 'growth'); ?>
    <?php get_template_part('template-parts/home-page/section', 'simpleway'); ?>

    <div class="h-[1000px]"></div>
  </main>
</div>