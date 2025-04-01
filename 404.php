<?php
if (! defined('ABSPATH')) exit;
?>

<?php get_template_part('template-parts/header'); ?>

<main>
    <div class="container">
        <div class="page">
            <div class="page__body wrapper page-404">
                <h2 class="page-404__title">お探しのページが見つかりませんでした。</h2>
                <p class="page-404__text">お客様がお探しのページは移動、または、削除された可能性があります。<br>お手数ですが、以下より必要な情報をお探しください。</p>
                <a href="<?php echo home_url("/"); ?>" class="page-404__link">トップページに戻る</a>
            </div>

        </div>
    </div>
</main>

<?php get_template_part('template-parts/footer'); ?>