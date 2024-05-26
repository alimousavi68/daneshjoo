<?php
?>
<div class="row">

  <div class="col-xl-17 col-lg-17 col-md-24 col-sm-24 px-0 ps-lg-2">

    <?php dynamic_sidebar('hmr-sidebar'); ?>
  </div>
  <!-- sidebar  -->
  <div
    class="col-24 col-xl-7 col-lg-7 col-md-24 col-sm-24  hl-sidebar d-flex flex-wrap gap-2 i8-sticky justify-content-center ps-0 ps-lg-0 ps-md-0 ps-xl-0 px-0 px-lg-2 px-xl-2">
    <?php
    dynamic_sidebar('hl-sidebar');
    ?>

  </div>
</div>

<div class="row d-flex flex-row flex-wrap">
  <div
    class="hmer-sidebar col-lg-8 col-md-12 col-sm-24 col-xl-8 d-flex flex-column flex-wrap gap-xl-3 gap-lg-3 gap-md-3 gap-sm-0  gap-0 pe-lg-0 pe-md-0 pe-xl-0 ps-lg-2 ps-md-2 ps-xl-2 px-0 ">
    <?php dynamic_sidebar('hmer-sidebar'); ?>
  </div>
  <div
    class="hmec-sidebar col-lg-8 col-md-12 col-sm-24 col-xl-8 d-flex flex-column flex-wrap gap-xl-3 gap-lg-3 gap-md-3 gap-sm-0  gap-0 ps-lg-0 ps-md-0 ps-xl-0 pe-lg-2 pe-md-2 pe-xl-2 px-0">
    <?php dynamic_sidebar('hmec-sidebar'); ?>
  </div>
  <div
    class="hmel-sidebar col-lg-8 col-md-24 col-sm-24 col-xl-8 row d-flex flex-column flex-md-row flex-wrap gap-xl-3 gap-lg-3 gap-md-0 gap-sm-0  gap-0 ps-lg-0 ps-md-0 ps-xl-0 pe-lg-2 pe-md-2 pe-xl-2 px-0">
    <?php dynamic_sidebar('hmel-sidebar'); ?>
  </div>
</div>

