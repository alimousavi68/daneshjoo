<?php
echo $args['before_widget'];

if ($hide_title != 'on') {
  echo '<div class="text-title box-title  ' . $head_font_size . ' fw-7 m-0 me-lg-2 me-md-2">';
  echo $args['before_title'] . $icon_print . $title . $args['after_title'];
  echo $sub_title_print . '</div>';
}
?>

<div class="row vitrin-2 px-0 row-gap-3">
  <?php
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
    <?php
    while ($category_posts->have_posts()):
      $category_posts->the_post();
      ?>
      <div class="col-24 col-xl-12 col-lg-12 col-md-24  px-0">
        <div class="vitrin-2-big-item d-flex justify-content-center vitrin-img image_frame">

          <?php echo i8_the_thumbnail('i8-621-389', 'w-100 h-100  round-15px overflow-hidden hover i8-img-fit img-fit-size-on-mobile', $dimenition = array('width' => 620, 'height' => 414), true, '', false, true); ?>
          <div class="post-flip-box-link-wrapper">
            <a href="<?php echo get_the_permalink(); ?>" class="post-flip-box-link "></a>
          </div>

          <div class="item-caption">
            <a href="<?php echo get_the_permalink(); ?>" class=" l1 fw-4 fd-0 display-2 ">
              <?php i8_limit_text(get_the_title(), 89, '...'); ?>
            </a>
          </div>

        </div>
      </div>
      <?php
    endwhile;
  endif;
  ?>

  <div class="col-24 col-xl-12 col-lg-12 col-md-24 row row-gap-3 px-0 align-items-start">
    <?php
    // نمایش محتویات ویجت- نمایش پست ها
    $category_posts = new WP_Query(
      array(
        'posts_per_page' => 4,
        'cat' => $cat,
        'order' => 'DESC',
        'offset' => '1',
        'orderby' => $orderby
      )
    );
    if ($category_posts->have_posts()): ?>
      <?php
      while ($category_posts->have_posts()):
        $category_posts->the_post();
        ?>
        <div
          class="col-12 col-xl-12 col-sm-12 vitrin-2-small-item ps-1 pe-1 pe-xl-3 pe-lg-3 pe-sm-3 vitrin-img image_frame_2  position-relative d-flex justify-content-center ">
          <?php echo i8_the_thumbnail('i8-294-184', 'w-100 h-auto round-15px overflow-hidden hover  object-fit-cover', $dimenition = array('width' => 294, 'height' => 196), true, '', false, true); ?>

          <div class="post-flip-box-link-wrapper">
            <a href="<?php echo get_the_permalink(); ?>" class="post-flip-box-link "></a>
          </div>

          <div class="item-caption disable-item-caption">
            <a href="<?php echo get_the_permalink(); ?>" class=" l1 fw-4 fd-0 display-5">
              <?php i8_limit_text(get_the_title(), 83, '...'); ?>
            </a>
          </div>
        </div>
        <?php
      endwhile;
    endif;
    ?>
  </div>
</div>






<?php
echo $args['after_widget'];
?>