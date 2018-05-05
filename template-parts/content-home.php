<?php
/**
 * Template part for displaying posts on Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FSD WP Theme
 */

?>

<div class="services-item">
  <div class="services-icon">
    <?php if (has_post_thumbnail()):
      the_post_thumbnail( 'homepage-icon');
    else:?>
    <i class="fa fa-thumbs-up fa-5x"></i>
    <?php endif; ?>
  </div>
  <div class="services-body">
    <h2 class="services-title"><?php the_title();?></h2>
    <p class="services-text"><?php the_excerpt();?></p>
  </div>
  <button class="services-btn" type ="button"><a href="<?php the_permalink();?>">
    Read More</a></button>
</div>
