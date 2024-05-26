<?php
//header
get_header();
?>
<div class="top-section container-fluid d-flex flex-column gap-2 px-0">
    <div class="top-section-container container d-flex flex-column gap-4 px-0">
        <?php
        // todo: if top main is active
        get_template_part('template-parts/top_section'); ?>
    </div>
</div>

<?php if (is_active_sidebar('h-sub-slider')): ?>
    <div class="container px-0 mt-4">

        <div class="box-style-white p-2 p-xl-4 p-lg-4 p-sm-4">
            <?php dynamic_sidebar('h-sub-slider'); ?>

        </div>
    </div>
<?php endif; ?>


<div class="container px-0 mt-4">
    <div class="row row-gap-2 flex-column-reverse flex-sm-row">
        <div class="col-24 col-md-12 col-sm-24 px-0 ps-md-2 pe-md-0 ">
            <div class="box-style-white p-2 p-xl-4 p-lg-4 p-sm-4">
                <?php dynamic_sidebar('h-radio-sidebar') ?>
            </div>
        </div>
        <div class="col-24 col-md-12 col-sm-12 px-0 pe-sm-2 ps-md-0">
            <div class="box-style-white p-2 p-xl-4 p-lg-4 p-sm-4">
                <?php dynamic_sidebar('h-player-sidebar') ?>
            </div>
        </div>
    </div>
</div>

<div class="container d-flex flex-column gap-2 px-0">
    <div class="home-main-box py-3  d-flex flex-column gap-3">
        <?php
        // Main box
        get_template_part('template-parts/home-main-box');
        ?>
    </div>
</div>

<?php if (is_active_sidebar('hf-sidebar')): ?>
    <div class="hf-sidebar page-bottom-sidebar py-5 mt-3 ">
        <div class="container">
            <?php
            dynamic_sidebar('hf-sidebar');
            ?>
        </div>
    </div>
<?php endif; ?>

<?php
// //footer
get_footer();
?>