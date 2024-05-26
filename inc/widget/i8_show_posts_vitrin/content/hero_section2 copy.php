<?php
echo $args['before_widget'];

if ($hide_title != 'on') {
  echo '<div class="text-title box-title  ' . $head_font_size . ' fw-7 m-0 me-lg-2 me-md-2">';
  echo $args['before_title'] . $icon_print . $title . $args['after_title'];
  echo $sub_title_print . '</div>';
}

?>
<style>
  .single-item-data {
    height: 100%;
  }

  .hero-small-column>div:first-child {
    border-bottom: 1px solid var(--bs-border-color);
  }

  @media(min-width:820px) {
    .secondray-item {
      height: 293px;
    }
  }
</style>


<?php
// <!-- mainslider-2 Single-Item -->

// نمایش محتویات ویجت- نمایش پست ها
$category_posts = new WP_Query(
  array(
    'posts_per_page' => 1,
    'cat' => $cat,
    'order' => 'DESC',
    'orderby' => $orderby
  )
);
if ($category_posts->have_posts()): ?>
  <div
    class="col-24 col-lg-16 col-md-16 col-sm-24 col-xl-16 d-flex flex-column gap-0 i8-border-md-none  ps-lg-2 ps-md-2 px-lg-0  single-item">
    <?php
    while ($category_posts->have_posts()):
      $category_posts->the_post();
      ?>
      <a href="<?php the_permalink(); ?>">
        <?php echo i8_the_thumbnail('i8-621-389', 'single-item-thumb hover w-100 i8-img-fit img-fit-size-on-mobile round-10px', $dimenition = array('width' => 590, 'height' => 370), true, '', false, true); ?>
      </a>
      <div class="single-item-data single-big-post-meta-container d-flex flex-column gap-0">
        <!-- <span class="post-subtitle f13 fw-1"><?php $subtitle = get_post_meta(get_the_ID(), '_post_subtitle', true);
        echo ($subtitle) ? $subtitle : ''; ?></span> -->
        <h1 class="post-title pe-2 "
          style="min-height:90px;font-size:30px;border-right: 5px solid var(--i8-light-complete-color);">
          <a href="<?php echo get_the_permalink(); ?>" class=" l1 fw-4 fd-0">
            <?php i8_limit_text(get_the_title(), 115, '...'); ?>
          </a>
        </h1>


        <!-- related-posts -->
        <?php
        $selected_post_structure = get_post_meta(get_the_ID(), 'i8_post_structure', true);

        $post_link1_id = get_post_meta(get_the_ID(), 'hasht-related-link1', true);
        $post_link2_id = get_post_meta(get_the_ID(), 'hasht-related-link2', true);
        $post_link3_id = get_post_meta(get_the_ID(), 'hasht-related-link3', true);

        $related_post_link_id = array($post_link1_id, $post_link2_id, $post_link3_id);

        if ($selected_post_structure == 'hot' && !(empty($related_post_link_id))): ?>
          <div class="timeline_list ">
            <?php
            // نمایش محتویات ویجت- نمایش پست ها
            $related_category_posts = new WP_Query(
              array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'post__in' => $related_post_link_id,
                'orderby' => 'post__in',
              )
            );

            if ($related_category_posts->have_posts()) {
              while ($related_category_posts->have_posts()) {
                $related_category_posts->the_post();
                ?>

                <div class="timeline-item" style="padding:2.5em 1.2em 0em"
                  date-is='<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' پیش'; ?>'>
                  <a class=" display-5 fw-2 l22-05 text-normal cursor-pointer text-grey"
                    href="<?php echo get_the_permalink(); ?>">
                    <?php
                    show_post_structure_related_icon(get_the_ID());
                    i8_limit_text(get_the_title(), 100, '...'); ?>

                  </a>
                </div>

                <?php
              }
              wp_reset_postdata();
            }
            ?>
          </div>
        <?php elseif ($hide_excerpt != 'on'): ?>
          <p class="post-excerpt f13 fw-2">
            <?php i8_limit_text(get_the_excerpt(), 220, '...'); ?>
          </p>
          <p class="post-publish-date f12 text-start text-subtitle">
            <?php the_date() ?>
          </p>
        <?php endif; ?>


      </div>
    <?php endwhile;
endif; ?>
</div>
<!-- end single items -->

<!-- multi items -->
<div class="col-24 col-xl-8 col-lg-8 col-md-8 col-sm-24 multi-items px-0 px-xl-0 px-lg-0 px-md-0  d-flex gap-1">
  <div class="row">
    <?php
    $category_posts2 = new WP_Query(
      array(
        'posts_per_page' => 1,
        'cat' => $cat,
        'order' => 'DESC',
        'offset' => '1',
        'orderby' => $orderby
      )
    );
    if ($category_posts2->have_posts()): ?>
      <div
        class="col-24 col-lg-24 col-md-24 col-sm-24 d-flex flex-column gap-3 border-start i8-border-sm-none hero-small-column">

        <?php
        while ($category_posts2->have_posts()):
          $category_posts2->the_post();
          ?>
          <div class="secondray-item d-flex flex-column gap-2">
            <a href="<?php the_permalink(); ?>">
              <?php echo i8_the_thumbnail('i8-294-184', 'multi-item-thumb hover w-100 i8-img-fit round-10px', $dimenition = array('width' => 275, 'height' => 172), true, '', false, true); ?>
            </a>
            <div class="single-item-data d-flex flex-column gap-0 justify-content-between">
              <div class="title-box">
                <h2 class="post-title display-4 pe-1 fw-5 l1"><a href="<?php echo get_the_permalink(); ?>" class="">
                    <?php i8_limit_text(get_the_title(), 86, '...'); ?>
                  </a></h2>
              </div>
              <!-- <p class="post-publish-date f12 text-start text-subtitle my-0">
                <?php //the_date()  ?>
              </p> -->



            </div>
          </div>

          <?php
        endwhile;
    endif;
    ?>

      <!-- small sub post -->

      <?php
      echo '<div class="row">';
      // نمایش محتویات ویجت- نمایش پست ها
      $category_posts = new WP_Query(
        array(
          'posts_per_page' => ($num - 2),
          'cat' => $cat,
          'order' => 'DESC',
          'orderby' => $orderby,
          'offset' => '2'
        )
      );

      if ($category_posts->have_posts()) {
        while ($category_posts->have_posts()) {
          $category_posts->the_post();
          ?>
          <div
            class="<?php echo $col; ?>  mini-article d-flex   <?php echo ($category_posts->current_post + 1 == $category_posts->post_count) ? '' : 'border-bottom'; ?> pb-2 mb-2 px-0 ">
            <div>

              <a href="<?php the_permalink(); ?>" class="image_frame">
                <?php echo i8_the_thumbnail('i8-80-63', 'hover round-7px', $dimenition = array('width' => 80, 'height' => 60), true, '', false, true); ?>
              </a>

            </div>
            <div class="d-flex flex-column ">
              <h2 class="me-2 l22-05 post-title">
                <a class=" display-5 l1" href="<?php echo get_the_permalink(); ?>">
                  <?php i8_limit_text(get_the_title(), 65, '...'); ?>
                </a>
              </h2>
              <!-- <p class="post-publish-date f12 text-end text-subtitle my-0 me-2">
                <?php // the_date()  ?>
              </p> -->
            </div>

          </div>
          <?php

          wp_reset_postdata();
        }
      }
      echo '</div>';

      ?>


    </div>
  </div>
</div>

<?php
echo $args['after_widget'];
?>
