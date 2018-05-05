<?php get_header();
/*
Template name: Home Page

* Template for Home Page
*
* @package FSD WP Theme
*/
?>
    <section class="services wrapper">
    <?php
      $cat_slug = "services";
      $services = new WP_Query(array('category_name'=> $cat_slug, 'order' => 'ASC', 'post_per_page' => 4));
      if ($services->have_posts()):
        while ($services->have_posts()):
          $services->the_post();

          get_template_part( 'template-parts/content', 'home' );



        endwhile;
        wp_reset_postdata();
      else:
        echo '<p>No content found</p>';
      endif;?>

<?php get_footer();
