<?php ?>
<div class="row mx-0">
  <div class="col-xl-17 col-md-24 col-sm-24 d-flex flex-column box px-3 row-gap-3 pe-md-0">

    <div class="row d-flex align-items-top mx-0 align-content-center row-gap-3 i8-breadcrumb box align-items-center  flex-wrap justify-content-around box-style-white p-2">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  box-title text-center text-sm-end m-0">
        <?php
        $cat = get_queried_object();
        // $cat_color   =   get_term_meta($cat->term_id, 'i8_CustomTerm_color', true) ? get_term_meta($cat->term_id, 'i8_CustomTerm_color', true) : '#000';
        // $cat_icon   =   get_term_meta($cat->term_id, 'i8_CustomTerm_icon', true) ? get_term_meta($cat->term_id, 'i8_CustomTerm_icon', true) : '';
        // $icon_print =  ($cat_icon) ? customizeSVG($cat_icon, $cat_color, $cat_color, 30, 30) : '';

        echo '<span class=" display-3 ms-2"> ' .  $cat->name . '</span>';
        the_archive_description('<p>', '</p>');
        ?>
      </div>
      <div class="i8-breadcrumb col-md-12 col-sm-12 mb-0 d-flex flex-row align-items-center  justify-content-center justify-content-sm-end text-gray f14 py-0" aria-label="breadcrumb">
        <?php i8_breadcrumb(); ?>
      </div>
    </div>
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
        get_template_part('template-parts/content/content-archive');
      endwhile;
      // Pagination
      i8_custom_pagination();
    else :
      //to do 
      echo '<p>پستی وجو ندارد!</p>';
    endif;
    ?>
  </div>


  <!-- sidebar  -->
  <div class="al-sidebar col-xl-7 col-md-24 col-sm-24 ps-0 pt-4 pt-xl-0 pt-md-4 pt-sm-4 pe-xl-3 pe-0 pe-sm-0 i8-sticky ">
      <?php
      dynamic_sidebar('al-sidebar');
      ?>
  </div>


</div>