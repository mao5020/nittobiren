<?php get_header(); ?>
<div class="page_cover">
  <h1 class="page_ttl">講習会</h1>
</div>
<?php get_template_part('p-header'); ?>
</body>
</html>

<div class="flex_inner">
  <?php get_sidebar();?>
  <div class="l_inner">
    <section class="lecture sec_inner">
      <h2 class="h2_ttl">講習会について</h2>
      <div class="lecture-content">
        <p class="lecture-txt">
          日鳶連では、各種作業主任者技能講習、<br>
          及び玉掛け技能講習を全国で開催し、数多くの作業主任者を育成しています。
        </p>
      </div>
      <div class="kikan-corse">
        <div class="kikan-corse-btn"></div>
        <div class="C_more_btn kikan-corse-btn">
          <div class="C_more_btn_block">
            <a href="" class="C_more_btn_block-link">
              <p class="C_more_btn_block-link-txt">講習会についてのお問い合わせ</p>
              <p><img src="<?php echo get_theme_file_uri()?>/image/common/more.png" alt="" class="C_more_btn_block-link-img"></p>
            </a>
          </div>
        </div>
      </div>
    </section>
    
    <section class="lecture sec_inner">
      <h2 class="h2_ttl">作業主任者技能講習</h2>
      <div class="lecture-content">
        <p class="lecture-txt">
          労働安全衛生法第１４条に定める作業主任者を選任するための技能講習。<br>
          当会登録種目は以下のとおり。
        </p>
      </div>
      
      <div class="l_chart">
        <p class="l_chart_row">01</p>
        <p class="l_chart_data">足場の組立て等作業主任者技能講習</p>
      </div>
      <div class="l_chart">
        <p class="l_chart_row">02</p>
        <p class="l_chart_data">型枠支保工の組立て等作業主任者技能講習</p>
      </div>
      <div class="l_chart">
        <p class="l_chart_row">03</p>
        <p class="l_chart_data">地山の掘削及び土止支保工作業主任技能講習</p>
      </div>
      <div class="l_chart">
        <p class="l_chart_row">04</p>
        <p class="l_chart_data">建築物等の鉄骨の組立て等作業主任者技能講習</p>
      </div>
      <div class="l_chart">
        <p class="l_chart_row">05</p>
        <p class="l_chart_data"></p>
      </div>
      <div class="l_chart">
        <p class="l_chart_row">06</p>
        <p class="l_chart_data"></p>
      </div>
      <div class="l_chart">
        <p class="l_chart_row">07</p>
        <p class="l_chart_data"></p>
      </div>
    </section>
  </div><!-- /l_inner -->
</div><!-- flex_inner -->
<?php get_footer(); ?>