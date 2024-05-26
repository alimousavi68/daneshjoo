<?php
echo $args['before_widget'];

echo '<div class="text-title box-title  ' . $head_font_size . ' fw-7  me-2"  style="color:'. $cat_color. '">';
if ($hide_title != 'on') {
  echo $args['before_title'] . $icon_print . $title . $args['after_title'];
}
echo $sub_title_print . '</div>';


echo '<ul class="numeric-list-content d-flex flex-wrap mb-0 row-gap-0 row-gap-xl-4 row-gap-lg-4 row-gap-md-4 pt-2">';
// نمایش محتویات ویجت- نمایش پست ها
$category_posts = new WP_Query(array(
    'posts_per_page' => $num,
    'cat' => $cat,
));

if ($category_posts->have_posts()) {
    while ($category_posts->have_posts()) {
        $category_posts->the_post();
        ?>

        <li
            class="col-24 col-lg-24 col-md-12 col-sm-12 py-3 py-lg-2 py-md-2 py-xl-2 <?php echo ($category_posts->current_post + 1 == $category_posts->post_count) ? '' : 'border-bottom'; ?>">
            <article class="numeric-list ">
                <div class="numeric-list-item d-flex justify-content-start align-items-top ">
                    <span class="number-span" style="color:<?php echo $cat_color; ?>"><?php echo $category_posts->current_post + 1; ?></span>
                    <div class="list-title-none">
                        <span class="text-gray f14 fw-2">
                            <?php echo i8_primary_category(get_the_ID()); ?>
                        </span>
                        <a href="<?php the_permalink(); ?>"
                            class="<?php echo $title_font_size; ?> <?php echo $title_font_weight; ?>  text-gray">
                            <?php i8_limit_text(get_the_title(), 70, '...'); ?>
                        </a>
                    </div>
                </div>
            </article>
        </li>
        <?php
    }
    wp_reset_postdata();
}
echo '</ul>';
echo $args['after_widget'];