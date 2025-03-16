<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: トップページ
*/
?>

<?php get_template_part('template-parts/header'); ?>

<main>
    <?php get_template_part('template-parts/fv'); ?>
    <?php get_template_part('template-parts/problems'); ?>
    <?php get_template_part('template-parts/concierge'); ?>
    <?php get_template_part('template-parts/cm'); ?>
    <?php get_template_part('template-parts/important'); ?>
    <?php get_template_part('template-parts/indoorgolf'); ?>
    <?php get_template_part('template-parts/flow'); ?>
    <?php get_template_part('template-parts/faq'); ?>
    <?php get_template_part('template-parts/contact'); ?>
</main>

<?php get_template_part('template-parts/footer'); ?>