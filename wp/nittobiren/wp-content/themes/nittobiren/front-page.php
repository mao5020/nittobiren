<?php get_header(); ?>
  <div class="main">
    <div class="main-ttl">
      <p><img class="main-ttl-icon" src="<?php echo get_theme_file_uri()?>/image/common/logo_white.png" alt=""></p>
      <h1 class="main-ttl-txt">一般社団法人 日本鳶工業連合会</h1>
    </div>
    <h2 class="main-catch">私たちは<br class="sp_br">鳶・土工工事事業の技術と<br>経営の向上を目指します</h2>
  </div><!-- main -->

  <div class="flex_inner">
    <?php get_sidebar(); ?><!-- sidemenu呼び出し .menu -->
    <div class="l_inner">
      <section class="notice sec_inner">
        <h2 class="notice-ttl h2_ttl">お知らせ</h2>
        <p class="notice-txt">日鳶連では建設分野における外国人の受け入れ事業を行なっています。<br>詳しくは<a href="<?php echo get_site_url(); ?>/foreigner" class="notice-ttl-link">こちら</a>をご覧ください。</p>
      </section>
      <section class="new sec_inner">
        <h2 class="new-ttl h2_ttl">新着情報</h2>

        <?php 
          $args = array(
            'post_type' => 'news', //お知らせページ読み込み
            'posts_per_page' => '3' //最大件数
          );
          $my_query = new WP_Query($args);
        ?>
        <?php while ($my_query->have_posts() ) : $my_query->the_post(); ?>
        <?php 
          $values = CFS()->get('news_category'); 
          foreach($values as $Key => $label):
        ?>
        <div class="new-topics-item">
        <p class="new-topics-item-link-date"><?php echo get_the_date(); ?></p>
        <span class="new-topics-item-link-category"><?php echo $label; ?></span>
        <?php endforeach; ?>
        <?php if($cfs->get('news_link')): ?>
        <a href="<?php echo $cfs->get('news_link');?>" class="new-topics-item-link-txt sp-new-topics-item-link-txt"><?php echo $cfs->get('news_txt'); ?></a>
        <?php elseif($cfs->get('news_pdf')): ?>
        <a href="<?php echo $cfs->get('news_pdf');?>" class="new-topics-item-link-txt sp-new-topics-item-link-txt" target="_blank"><?php echo $cfs->get('news_txt'); ?></a>
        <?php else:?>
        <p class="new-topics-item-link-txt sp-new-topics-item-link-txt"><?php echo $cfs->get('news_txt'); ?></p>
        <?php endif; ?>
      </div>
      <?php endwhile; ?>
        <div class="C_more_btn">
          <div class="C_more_btn_block E_more_btn_right">
            <a href="<?php echo get_site_url(); ?>/news" class="C_more_btn_block-link">
              <p class="C_more_btn_block-link-txt">もっと見る</p>
              <p><img class="C_more_btn_block-link-img" src="<?php echo get_theme_file_uri()?>/image/common/more.png" alt="" class="C_more_btn_block-link-img"></p>
            </a>
          </div>
        </div>
      </section><!-- /new -->
      <section class="document sec_inner">
        <h2 class="document-ttl h2_ttl">各省庁発表資料等</h2>
        <p class="document-txt">労災の対応や工事中断における措置などの告知・資料等を掲載しております。</p>
        <h3 class="h3_ttl">業界資料</h3>
        <a href="https://www.mhlw.go.jp/new-info/kobetu/roudou/gyousei/anzen/120309-1.html" target="_blank" rel="noopener"><p class="document-link">足場からの墜落・転落災害防止総合対策推進要綱ポイント</p></a>
      </section>
      <section class="course sec_inner">
        <div class="course-left">
          <div class="course-one">
            <h2 class="h2_ttl">技能検定、各種講習</h2>
            <h3 class="h3_ttl">各種技能講習会について</h3>
            <p class="course-one-txt">日鳶連では、各種作業主任者技能講習、 <br>及び就業制限に基づく技能講習を全国で開催し、数多くの作業主任者を排出しています。</p>
          </div>  
          <div class="course-two">
            <h3 class="h3_ttl">登録鳶・土工基幹技能者講習</h3>
            <p class="course-two-txt">登録鳶・土工基幹技能者は、 建設業法に基づき国土交通省により認定された資格です。</p>
            <div class="C_more_btn">
              <div class="C_more_btn_block">
                <a href="<?php echo get_site_url(); ?>/kikan" class="C_more_btn_block-link">
                  <p class="C_more_btn_block-link-txt">講習を受ける</p>
                  <p><img class="C_more_btn_block-link-img" src="<?php echo get_theme_file_uri()?>/image/common/more.png" alt="" class="C_more_btn_block-link-img"></p>
                </a>
              </div>
            </div>
          </div>
        </div>  
        <div class="course-right">
          <img class="course-right-img" src="<?php echo get_theme_file_uri()?>/image/top/top1.png" alt="" width="350px">
        </div>
      </section><!-- course -->
        <section class="course sec_inner">
          <div class="course-left">
            <div class="support-one">
              <h2 class="h2_ttl">各種支援事業</h2>
              <h3 class="h3_ttl">建設キャリアアップシステム</h3>
              <p>
                建設キャリアアップシステムは、技能者一人ひとりの就業実績や資格を登録し、技能の公正な評価、工事の品質向上、現場作業の効率化などに繋げるシステムです。
              </p>
              <div class="C_more_btn">
                <div class="C_more_btn_block">
                  <a href="https://www.ccus.jp/p/about" target="_blank" rel="noopener" class="C_more_btn_block-link">
                    <p class="C_more_btn_block-link-txt">CCUSについて</p>
                    <p><img class="C_more_btn_block-link-img" src="<?php echo get_theme_file_uri()?>/image/common/more.png" alt="" class="C_more_btn_block-link-img"></p>
                  </a>
                </div>
              </div>
            </div>
            <div class="support-two">
              <h3 class="h3_ttl">CCUSに伴うとび技能者能力評価について</h3>
              <div class="C_more_btn">
                <div class="C_more_btn_block">
                  <a href="<?php echo get_site_url(); ?>/evaluation" class="C_more_btn_block-link">
                    <p class="C_more_btn_block-link-txt">詳細はこちら</p>
                    <p><img class="C_more_btn_block-link-img" src="<?php echo get_theme_file_uri()?>/image/common/more.png" alt="" class="C_more_btn_block-link-img"></p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="course-right">
            <img class="course-right-img" src="<?php echo get_theme_file_uri()?>/image/top/top2.png" alt="" width="350px">
          </div>
        </section><!-- /support -->
        <section class="sec_inner course">
          <div class="course-left">
            <h2 class="h2_ttl">外国人受け入れ事業</h2>
            <p>日鳶連では令和２年１月31日付けで厚生労働省より<r>外国人実習生に係る監理団体の許可が承認されたことを受けて、<br>外国人技能実習生の受入事業を行っています。</p>
            <div class="C_more_btn">
              <div class="C_more_btn_block ">
                <a href="<?php echo get_site_url(); ?>/foreigner" class="C_more_btn_block-link">
                  <p class="C_more_btn_block-link-txt">詳細はこちら</p>
                  <p><img class="C_more_btn_block-link-img" src="<?php echo get_theme_file_uri()?>/image/common/more.png" alt="" class="C_more_btn_block-link-img"></p>
                </a>
              </div>
            </div>
          </div>
          <div class="course-right">
            <img class="course-right-img" src="<?php echo get_theme_file_uri()?>/image/top/top3.png" alt="" width="350px">
          </div>
        </section>
      </div><!-- /l_inner -->
    </div><!-- /flex_inner -->
  <?php get_footer(); ?>
