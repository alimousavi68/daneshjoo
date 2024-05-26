<?php
$bigSliderCat = 17;


$one_post_query_args = array(
    'posts_per_page' => '1',
    'cat' => $bigSliderCat,
    'order' => 'DESC',
);
// The Query
$one_post_query = new WP_Query($one_post_query_args);

$two_post_query_args = array(
    'posts_per_page' => '4',
    'cat' => $bigSliderCat,
    'offset' => '1',
    'order' => 'DESC',
);
// The Query
$two_post_query = new WP_Query($two_post_query_args);
?>

<div class="row p-0 top-section box-style-white p-2 p-xl-4 p-lg-4 p-sm-4 ">
    <!--  top-right-sidebar -->
    <?php
    dynamic_sidebar('top_section_right');
    ?>
</div>
