<?php 
/* 
パンくずリスト
*/
?>

<div class="breadnav wrapper">
    <?php if (!is_front_page()) { ?>
      <?php if (function_exists('bcn_display')) { ?>
        <div class="breadcrumb" id="breadcrumb" class="<?php echo is_single() ? 'single-breadcrumb' : 'w_inner'; ?>" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </div>
      <?php } ?>
    <?php } ?>
  </div><!-- /.breadnav -->