<?php
if (! defined('ABSPATH')) exit;
?>

<?php get_template_part('template-parts/header'); ?>

<main>
    <div class="container">
        <div class="page">
            <div class="page__body wrapper">
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</main>

<?php get_template_part('template-parts/footer'); ?>