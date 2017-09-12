<?php /* Template Name: Home Page */ get_header(); ?>

  <div class="content_left clearfix">

    <?php query_posts("showposts=6"); ?>
      <div class="slider_block">
        <ul class="slider">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li>
              <?php if ( has_post_thumbnail()) { ?>
                <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php } else { ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php } ?>
              <div class="slider_text_block">
                <span class="st_head"><?php the_title(); ?></span>
                <?php wpeExcerpt('wpeExcerpt10'); ?>
                <a href="<?php the_permalink(); ?>" class="slider_read">читать</a>
              </div>
            </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    <?php wp_reset_query(); ?>

    <div class="fob_line ">
      <p>ТОП ФОБИЙ по популярности</p>
      <a href="http://fobiya.info/spisok-fobij ">Все фобии</a>
    </div>
    <div class="fobias_3x clearfix ">
      <a href="http://fobiya.info/strah-zhivotnyh/arahnofobiya " class="fobia_item ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fobia_item_1.jpg " alt=" "> <span class="fi_name ">Арахнофобия</span> <span class="fi_descr ">Страх пауков</span> </a>
      <a href="http://fobiya.info/strah-situatsij/akrofobiya " class="fobia_item ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fobia_item_2.jpg " alt=" "> <span class="fi_name ">Акрофобия</span> <span class="fi_descr ">Страх высоты</span> </a>
      <a href="http://fobiya.info/strah-prostranstva/klaustrofobiya " class="fobia_item fi_right ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fobia_item_3.jpg " alt=" "> <span class="fi_name ">Клаустрофобия</span> <span class="fi_descr ">Страх замкнутого пространства</span> </a>
      <a href="http://fobiya.info/strah-lyudej/nekrofobiya " class="fobia_item ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fobia_item_4.jpg " alt=" "> <span class="fi_name ">Некрофобия</span> <span class="fi_descr ">Страх перед умершими</span> </a>
      <a href="http://fobiya.info/strah-dejstvij/aerofobiya " class="fobia_item ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fobia_item_5.jpg " alt=" "> <span class="fi_name ">Аэрофобия</span> <span class="fi_descr ">Страх полетов</span> </a>
      <a href="http://fobiya.info/strah-situatsij/niktofobiya " class="fobia_item fi_right ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fobia_item_6.jpg " alt=" "> <span class="fi_name ">Никтофобия</span> <span class="fi_descr ">Страх темноты</span> </a>
      <a href="http://fobiya.info/strah-zhivotnyh/gerpetofobiya " class="fobia_item ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fobia_item_7.jpg " alt=" "> <span class="fi_name ">Герпетофобия</span> <span class="fi_descr ">Страх пресмыкающихся</span> </a>
      <a href="http://fobiya.info/strah-situatsij/dentofobiya " class="fobia_item ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fobia_item_8.jpg " alt=" "> <span class="fi_name ">Дентофобия</span> <span class="fi_descr ">Страх стоматолога</span> </a>
      <a href="http://fobiya.info/strah-veshhestv/gemofobiya " class="fobia_item fi_right ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fobia_item_9.jpg " alt=" "> <span class="fi_name ">Гемофобия</span> <span class="fi_descr ">Страх вида крови</span> </a>
    </div>

  </div><!-- content_left clearfix -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
