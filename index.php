<?php get_header(); ?>

<main role="main">
  <!--swiper-->
  <section class="container-fluid fluid-con-con no-padding">
    <div class="swiper-container">
      <div class="swiper-wrapper">

          <?php
          $args = array(
              'post_type' => 'banner',
              'showposts' => '5',
          );
          $loop = new WP_Query($args);
          while ($loop->have_posts()):
              $loop->the_post();
              ?>
            <div class="swiper-slide">
                <?php the_post_thumbnail(); ?>
            </div>
              <?php
          endwhile;
          wp_reset_query();
          ?>

        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <!--news&notices-->
  <section class="container">
    <div class="row">
      <section class="news-con col-sm-7">
        <header class="row title-con">
          <h4 class="col-xs-9 no-padding-l">
            <span class="border-bottom">新闻动态<span>news</span></span>
          </h4>
          <div class="a-btn col-xs-3 no-padding-r">
            <a href="<?php echo home_url(); ?>/index.php/news">更多>></a>
          </div>
        </header>

        <div class="row">
            <?php
            $args = array(
                'post_type' => 'news',
                'showposts' => '3',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()):
                $loop->the_post();
                ?>

              <a href="<?php the_permalink() ?>" class="col-xs-12 item-cell"> 
                <div class="img-con">
                    <?php
                    if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail(); ?>
                    <?php } else { ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/new.jpg" alt="cover">
                    <?php } ?>
                </div>

                <div class="text-con">
                  <div class="title-text"><?php the_title(); ?> </div>
                  <div class="excerpt-text"><?php the_excerpt(); ?></div>
                </div>
              </a> 
                <?php

            endwhile;
            wp_reset_query();
            ?>

        </div>
      </section>

      <section class="notices-con col-sm-5">
        <header class="row title-con">
          <h4 class="col-xs-9 no-padding-l">
            <span class="border-bottom">公告<span>notices</span></span>
          </h4>

          <div class="a-btn col-xs-3 no-padding-r">
            <a href="<?php echo home_url(); ?>/index.php/notices">更多>></a>
          </div>
        </header>

        <div class="row">

            <?php
            $args = array(
                'post_type' => 'notices',
                'showposts' => '10',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()):
                $loop->the_post();

                ?>
              <a href="<?php the_permalink() ?>" class="col-xs-12 item-cell"> 
                <div class="text-con">
                  <div class="title-text"><span>[公告]</span><?php the_title(); ?> </div>
                </div>
              </a> 
                <?php

            endwhile;
            wp_reset_query();
            ?>
        </div>

      </section>

    </div>
  </section>

  <!--production-->
  <section class="container">
    <header class="row title-con">
      <h4 class="col-xs-9 no-padding-l">
        <span class="border-bottom">产品中心<span>productions</span></span>
      </h4>

      <div class="a-btn col-xs-3 no-padding-r">
        <a href="<?php echo home_url(); ?>/index.php/?page_id=10">更多>></a>
      </div>
    </header>
  </section>

  <!--cases-->
  <div class="container">
    <header class="row title-con">
      <h4 class="col-xs-9 no-padding-l">
        <span class="border-bottom">成功案例<span>cases</span></span>
      </h4>

      <div class="a-btn col-xs-3 no-padding-r">
        <a href="<?php echo home_url(); ?>/index.php/?page_id=10">更多>></a>
      </div>
    </header>

    <div class="row case-con">
        <?php
        $args = array(
            'post_type' => 'cases',
            'showposts' => '2',
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()):
            $loop->the_post();
            ?>

          <a href="<?php the_permalink() ?>" class="col-xs-12 item-cell"> 
            <div class="col-xs-12 col-sm-4 no-padding">
                <?php
                if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail(); ?>
                <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/case.jpg" alt="cover">
                <?php } ?>
            </div>

            <div class="col-xs-12 col-sm-8 no-padding-r text-con">
              <div class="title-text"><?php the_title(); ?> </div>
              <div class="excerpt-text"><?php the_excerpt(); ?></div>
            </div>
          </a> 
            <?php

        endwhile;
        wp_reset_query();
        ?>

    </div>

  </div>

  <!--partner-->
  <section class="container">
    <header class="row title-con">
      <h4 class="col-xs-12 no-padding">
        <span class="border-bottom">合作伙伴<span>partners</span></span>
      </h4>
    </header>

    <section class="row partner-con">
      <div class="col-sm-12 item-con">

          <?php
          $args = array(
              'post_type' => 'partners',
          );
          $loop = new WP_Query($args);
          while ($loop->have_posts()):
              $loop->the_post();
              ?>
            <div class="col-md-3 col-sm-4 col-xs-6 item-cell">
              <a href="<?php echo get_post_meta($post->ID, '_link', true) ?>" target="_blank" class="item-cell-link">
                  <?php the_post_thumbnail(); ?>
                <div class="hover-con"><span><?php the_title(); ?></span></div>
              </a>
            </div>

              <?php
          endwhile;
          wp_reset_query();
          ?>

      </div>
    </section>

  </section>

  <!--info -->
  <section class="container-fluid no-padding">
    <div class="row">
      <div class="col-xs-12">
        <div class="info-con">
          <div class="text">
            网上天路 购通世界<br>
            以诚为本 用心服务
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>

