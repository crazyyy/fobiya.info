<?php get_header(); ?>

  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div class="content_left clearfix">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <div class="article-text">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>

  </div><!-- content_left clearfix -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
