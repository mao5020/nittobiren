<?php get_header(); ?>
<div class="page_cover">
  <h1 class="page_ttl">登録基幹技能講習</h1>
</div>
<?php get_template_part('p-header'); ?>
</body>
</html>

<div class="flex_inner">
  <?php get_sidebar();?>
  <div class="l_inner">
    <section class="kikan sec_inner">
      <h2 class="h2_ttl">登録鳶・土工基幹技能者</h2>
      <div class="kikan-content">
        <p class="kikan-content-img"><img src="<?php echo get_theme_file_uri()?>/image/kikan/kikan.png" alt=""></p>
        <div class="kitan-content-right">
          <p class="kikan-txt">「登録鳶・土工基幹技能者」は、<br>建設業法に基づき国土交通省により認定された資格です。<br>
            日鳶連では、（一社）日本建設躯体工事業団体連合会（略称「日本躯体」）
            との連名により、平成20年12月12日付けで登録認可されました。<br>
            これにより、今後開催する認定講習の修了者は、<br>
            経営事項審査の加点（3点）対象とされます。<br>
            ※特例講習は平成24年度で終了しました。
          </p>
        </div>
      </div>
      <div class="kikan-corse">
        <div class="kikan-corse-btn"></div>
        <div class="C_more_btn kikan-corse-btn">
          <div class="C_more_btn_block">
            <a href="" class="C_more_btn_block-link">
              <p class="C_more_btn_block-link-txt">お問い合わせはこちら</p>
              <p><img class="C_more_btn_block-link-img" src="<?php echo get_theme_file_uri()?>/image/common/more.png" alt="" class="C_more_btn_block-link-img"></p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <div class="sec_inner">
      <p>登録鳶・土工基幹技能者講習会の受講資格、開催日程については下記の該当する項目をご確認ください。<p>
      <div class="kikan-corse">
        <div class="C_more_btn kikan-corse-btn">
          <div class="C_more_btn_block">
            <a href="<?php echo get_theme_file_uri() ?>/kikan_first" class="C_more_btn_block-link">
              <p class="C_more_btn_block-link-txt">新規講習</p>
              <p><img class="C_more_btn_block-link-img" src="<?php echo get_theme_file_uri()?>/image/common/more.png" alt="" class="C_more_btn_block-link-img"></p>
            </a>
          </div>
        </div>
        <div class="C_more_btn kikan-corse-btn">
          <div class="C_more_btn_block">
            <a href="<?php echo get_theme_file_uri() ?>/kikan_second" class="C_more_btn_block-link">
              <p class="C_more_btn_block-link-txt">更新講習</p>
              <p><img class="C_more_btn_block-link-img" src="<?php echo get_theme_file_uri()?>/image/common/more.png" alt="" class="C_more_btn_block-link-img"></p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /l_inner -->
</div><!-- flex_inner -->
<?php get_footer(); ?>