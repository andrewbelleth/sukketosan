<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: トップページ
*/
?>

<?php get_template_part('template-parts/header'); ?>

<main>    
    <?php get_template_part('template-parts/fv'); ?>
    <?php get_template_part('template-parts/pro'); ?>
    <?php get_template_part('template-parts/solution'); ?>
    <?php get_template_part('template-parts/cta'); ?>
    <?php get_template_part('template-parts/price'); ?>
    <?php get_template_part('template-parts/faq'); ?>
    <?php get_template_part('template-parts/company'); ?>
</main>

<?php get_template_part('template-parts/footer'); ?>