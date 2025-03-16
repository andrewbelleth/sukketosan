<?php
/* 
Template Name: 404
*/
?>

<?php get_template_part('template-parts/header'); ?>

<main>
    <div id="container_404" class="sub container_404 wrapper">
        <div class="error" id="error">
            <p>お探しのページが<br class="sp-only">見つかりません。</p>
            <div class="btn mgnt-80">
                <a class="btn__link" href="<?php echo  esc_url(home_url("/")); ?>">
                    TOPに戻る
                    <span class="arrow"></span><!-- /.arrow -->
                </a><!-- /.btn__link -->
            </div>

        </div>
    </div>
    <?php get_template_part('template-parts/contact-cta'); ?>
</main>

<?php get_template_part('template-parts/footer'); ?>