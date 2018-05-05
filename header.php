<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php bloginfo('name');?></title>

    <?php wp_head();?>

  </head>
    <body>
      <header class="site-header">

        <nav class="wrapper menu">
          <div class="menu-brand">
            <a class = href="#"><img src="<?php bloginfo('template_url')?>/images/logo.png" alt="logo" /></a>
          </div>

          <div class="menu-collapse">

            <div class="menu-burger">
              <span></span>
              <span></span>
              <span></span>
            </div>


          <?php $args = array(
            'theme_location' => 'primary',
            'container' => '',
            'menu_class' =>'menu-nav',
            'container_class' => '',
            'menu_id' => false,
            'depth'   => 2
          ); ?>
          <?php wp_nav_menu($args); ?>

          </div>
          <form action="/" method="get" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="s" id="search" value="<?php the_search_query(); ?>">
            <span class="search-btn"><img src="<?php bloginfo('template_url');?>/images/icon-search.png" alt="search-icon"></span>
  </form>

</form>
        </nav>
      </header>
    <!--- Here starts main content -->
      <main>
        <section id="top-slider">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 3)); ?>
                <?php $count = 0; ?>
                <?php foreach($slider as $slide): ?>
                  <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
                    <img d-block class="d-block w-100" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID), 'slider-image') ?>" class="img-fluid"/>
                    <div class="carousel-caption d-none d-md-flex">
                      <h5><?php echo $slide->post_title; ?></h5>
                      <p><?php echo $slide->post_content; ?></p>
                    </div>
                  </div>
                <?php $count++; ?>
              <?php endforeach; ?>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
        </section>
        <!--- Here starts main content -->
