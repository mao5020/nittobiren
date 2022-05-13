<?php if (is_user_logged_in()){
  }else {auth_redirect();
}; ?>
<?php get_header(); ?>
<?php 
/*
Template Name: member
*/
?>
<div class="page_cover">
  <h1 class="page_ttl">会員ページ</h1>
</div>
<div class="flex_inner">
  <?php get_sidebar();?>
  <div class="l_inner">
    <section class="sec_inner">
      <h2 class="h2_ttl">会議関連報告</h2>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="member-wrapper">
        <div class="member-box">
          <p class="member-right"><img src="<?php echo $cfs->get('member_img'); ?>" alt=""></p>
          <div class="member-left">
            <p class="member-txt"><?php echo $cfs->get('member_txt');?></p>
            <?php $values = CFS()->get('member_g_link');?>
            <?php foreach($values as $link_items):?>
            <div class="C_more_btn kikan-corse-btn">
              <div class="C_more_btn_block">
                <a href="<?php echo $link_items['member_link_pdf']; ?>" target=”_blank” class="C_more_btn_block-link">
                  <p class="C_more_btn_block-link-txt"><?php echo $link_items['member_link_txt']; ?></p>
                  <p><img class="C_more_btn_block-link-img" src="<?php echo get_theme_file_uri()?>/image/common/more.png" alt="" class="C_more_btn_block-link-img"></p>
                </a>
              </div>
            </div>
            <?php endforeach; ?> 
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </section>
    <?php 
      $args = array(
        'post_type' => 'newspaper', //お知らせページ読み込み
        'post_per_page' => '10' //最大件数
      );
      $my_query = new WP_Query($args);
      
    ?>
    <?php $count = 0; while($my_query->have_posts()) : $my_query->the_post(); ?>
    <?php $count++; ?>
    <section class="sec_inner">
      <?php if($count == 1): ?>
      <div class="member-paper">
        <h2 class="h2_ttl">日鳶連新聞</h2>
        <h3 class="h3_ttl">日鳶連新聞最新号</h3>
        <div class="C_more_btn kikan-corse-btn">
          <div class="C_more_btn_block">
            <a href="<?php echo CFS()->get('newspaper_pdf'); ?>" target=”_blank” class="C_more_btn_block-link">
              <p class="C_more_btn_block-link-txt"><?php echo CFS()->get('newspaper_number'); ?></p>
              <p><img class="C_more_btn_block-link-img" src="<?php echo get_theme_file_uri()?>/image/common/more.png" alt="" class="C_more_btn_block-link-img"></p>
            </a>
          </div>
        </div>
      </div>
      <div class="member-paper">
        <h3 class="h3_ttl">過去の日鳶連新聞</h3>
        <ul>
        <?php else: ?>
        <li><a class="member-paper-list" target=”_blank” href="<?php echo CFS()->get('newspaper_pdf'); ?>"><?php echo CFS()->get('newspaper_number'); ?></a></li>
        <?php endif; ?>
        <?php endwhile; ?>
        </ul>
      </div>
    </section>
  </div><!-- /l_inner -->
</div><!-- flex_inner -->
<?php get_footer(); ?>