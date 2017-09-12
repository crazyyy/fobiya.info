<?php get_header(); ?>

  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div class="content_left clearfix">

    <p class="article_head"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></p>

    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

  </div><!-- content_left clearfix -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
