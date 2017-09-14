<?php
/*
YARPP Template: Fobiya
Author: mitcho (Michael Yoshitaka Erlewine)
Description: A simple example YARPP template.
*/
?>

<div class="fob_line"><p>читайте также</p></div>
<div class="art_items" id="results">
  <?php if (have_posts()):?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="art_item">
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) { ?>
            <img width="270" height="180" src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php } else { ?>
            <img width="270" height="180" src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php } ?>
        </a>
        <div class="arti_text">
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
            <p class="arti_head"><?php the_title(); ?></p>
            <span class="arti_descr"><?php wpeExcerpt('wpeExcerpt10'); ?></span>
            <p class="arti_date"><?php the_time('j F Y'); ?></p>
          </a>
          <a href="<?php the_permalink() ?>" class="ari_read">Читать далее</a>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <p>Нет похожих записей</p>
  <?php endif; ?>
</div>
