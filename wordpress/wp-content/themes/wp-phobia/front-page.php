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
      <?php if( have_rows('top', 46) ): while ( have_rows('top', 46) ) : the_row(); ?>
        <a href="<?php the_sub_field('link'); ?>" class="fobia_item ">
          <img src="<?php $image = get_sub_field('image'); echo $image['url']; ?>" alt="<?php the_sub_field('title'); ?> <?php the_sub_field('description'); ?>">
          <span class="fi_name "><?php the_sub_field('title'); ?></span>
          <span class="fi_descr "><?php the_sub_field('description'); ?></span>
        </a>
      <?php endwhile; endif; ?>
    </div>

  </div><!-- content_left clearfix -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
