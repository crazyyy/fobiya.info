<div class="art_items clearfix">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="art_item">
      <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php if ( has_post_thumbnail()) { ?>
          <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php } else { ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php } ?>
      </a><!-- /post thumbnail -->
      <div class="arti_text">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <p class="arti_head"><?php the_title(); ?></p>
        </a>
        <span class="arti_descr"><?php wpeExcerpt('wpeExcerpt10'); ?></span>
        <p class="arti_date"><?php the_time('j F Y'); ?></p>
        <a href="<?php the_permalink(); ?>" class="ari_read">Читать далее</a>
      </div>
    </div>
  <?php endwhile; endif; ?>
</div>
