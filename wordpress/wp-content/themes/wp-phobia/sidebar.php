<div class="content_right">
  <div class="right_articles clearfix ">


<div class="syndroms_right">
      <p class="r_head">Виды депрессий</p>
      <div class="menu-vidy-depressij-container"><ul id="menu-vidy-depressij-1" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-713"><a href="http://depressia.info/vidy-depressiy/bipolyarnaya-depressiya/">Биполярная депрессия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-714"><a href="http://depressia.info/vidy-depressiy/bolshaya-depressiya/">Большая депрессия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-716"><a href="http://depressia.info/vidy-depressiy/malaya-depressiya/">Малая депрессия (дистимия)</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-733"><a href="http://depressia.info/vidy-depressiy/tsiklotimiya/">Циклотимия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-722"><a href="http://depressia.info/vidy-depressiy/sezonnoe-affektivnoe-rasstrojstvo/">Сезонное расстройство</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-862"><a href="http://depressia.info/vidy-depressiy/osennyaya-depressiya/">Осенняя депрессия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-734"><a href="http://depressia.info/vidy-depressiy/endogennaya-depressiya/">Эндогенная депрессия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-719"><a href="http://depressia.info/vidy-depressiy/psihogennaya-depressiya/">Психогенная депрессия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-721"><a href="http://depressia.info/vidy-depressiy/reaktivnaya-depressiya/">Реактивная депрессия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-717"><a href="http://depressia.info/vidy-depressiy/nevroticheskaya-depressiya/">Невротическая депрессия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-720"><a href="http://depressia.info/vidy-depressiy/psihoticheskaya-depressiya/">Психотическая депрессия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-807"><a href="http://depressia.info/vidy-depressiy/atipichnaya-depressiya/">Атипичная депрессия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-813"><a href="http://depressia.info/maskirovannaya-depressiya/">Маскированная депрессия</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-819"><a href="http://depressia.info/vidy-depressiy/alkogolnaya-depressiya/">Алкогольная депрессия</a></li>
</ul></div>    </div>

    <div class="ra_head_links clearfix ">
      <a href="#" class="current" id="popartlink">популярные </a> <a href="#" id="newartlink">Новые  статьи</a>
    </div>

    <div id="right-articles">

      <div id="pop-art">
        <?php query_posts( array( 'posts_per_page' => 6, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC' ) ); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="article_item ">
             <a href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail()) { ?>
                  <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } else { ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } ?>
                <p class="ai_head "><?php the_title(); ?></p>
              </a>
              <span class="ai_text"><?php wpeExcerpt('wpeExcerpt10'); ?> <a href="<?php the_permalink(); ?>">Подробнее</a></span>
            </div>
          <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
      </div><!-- pop-art -->


      <?php query_posts("showposts=6"); ?>
        <div id="new-art">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="article_item ">
              <a href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail()) { ?>
                  <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } else { ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } ?>
                <p class="ai_head "><?php the_title(); ?></p>
              </a>
              <span class="ai_text"><?php wpeExcerpt('wpeExcerpt10'); ?> <a href="<?php the_permalink(); ?>">Подробнее</a></span>
            </div>
          <?php endwhile; endif; ?>
        </div><!-- new-art -->
      <?php wp_reset_query(); ?>
    </div>
    <!-- <a href="#" class="all_articles ">Все статьи</a> -->
  </div>
</div>
