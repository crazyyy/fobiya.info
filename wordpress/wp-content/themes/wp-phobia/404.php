<?php get_header(); ?>
  <div class="content_left clearfix">

    <h1><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
    <div class="article-text">
      <a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a>
    </div>

  </div><!-- content_left clearfix -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
