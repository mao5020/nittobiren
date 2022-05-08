<?php get_header(); ?>
<?php 
/*
Template Name: news
*/
?>


<div class="page_cover">
  <h1 class="page_ttl">お知らせ</h1>
</div>
<div class="flex_inner">
  <?php get_sidebar(); ?><!-- sidemenu呼び出し .menu -->
  <div class="l_inner">
    <section class="info sec_inner">
      <h2 class="h2_ttl">お知らせ一覧</h2>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="new-topics-item">
        <p class="new-topics-item-link-date"><?php echo get_the_date(); ?></p>
        <?php 
          $values = CFS()->get('news_category'); 
          foreach($values as $Key => $label):
        ?>
        <span class="new-topics-item-link-category"><?php echo $label; ?></span>
        <?php endforeach; ?>
        <a href="" class="new-topics-item-link-txt sp-new-topics-item-link-txt sp-new-topics-item-link-txt"><?php echo $cfs->get('news_txt'); ?></a>
      </div>
      <?php endwhile; endif; ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>