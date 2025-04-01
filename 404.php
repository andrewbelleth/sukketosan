<?php
if (! defined('ABSPATH')) exit;
?>

<?php get_template_part('template-parts/header'); ?>

<main>
    <div class="container">
        <div class="page">
            <div class="page__body wrapper">
                <h2 class="404__title">お探しのページが見つかりませんでした。</h2>
                <p class="404__text">お探しのページが見つかりませんでした。</p>
                <a href="<?php echo home_url("/sukettosan"); ?>" class="404__link">トップページに戻る</a>
            </div>

        </div>
    </div>
</main>

<?php get_template_part('template-parts/footer'); ?>