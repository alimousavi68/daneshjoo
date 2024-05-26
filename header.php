<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color"
        content="<?php echo (get_theme_mod('i8_light_primary_color')) ? get_theme_mod('i8_light_primary_color') : '#0A93CD'; ?>" />
    <title>
        <?php echo wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
    <?php if (is_singular()): ?>
        <style media="print">
            .sl-sidebar,
            .sub-header,
            .bottom-content-bar,
            .related-post,
            #footer,
            .top-menu,
            #comments {
                display: none !important;
            }
        </style>

    <?php endif; ?>
    <style>
        

        .header-box {
            height: 62px;
        }



        .bottom-menu {
            color: white;
        }

        .row {
            margin: 0px !important;
            /* padding: 0px !important; */
        }



        .i8-main-menu-frame {
            background: linear-gradient(to bottom, var(--i8-light-primary) 50%, var(--i8-light-bg-color) 50%);
            transition: top 0.6s ease;

        }

        .dark-mode .i8-main-menu-frame {
            background: linear-gradient(to bottom, var(--i8-dark-fg-color) 50%, var(--i8-dark-bg-color) 50%);
            transition: top 0.6s ease;

        }

        .i8-main-menu {
            display: flex;
            max-width: 900px;
            height: 44px;
            overflow: hidden;
            padding: 7px;
            justify-content: space-between;
            flex-shrink: 0;
            position: relative;
            color: white;
            align-content: space-between;
            flex-wrap: wrap;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        #mini-logo {

            width: 0px;
            overflow: hidden;
            transition: width 0.5s ease;
        }

        .i8-show {
            width: 122px !important;
            transition: width 0.5s ease;
        }
    </style>

</head>



<style>
    .topbar {
        /* height: 26px; */
        padding: 5px 0;
    }

    .logo-container {
        display: flex;
        width: 170px;
        max-width: 170px;
        height: 107px;
        padding: 3px 0px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
        border-radius: 0px 0px 10px 10px;
        background: var(--i8-dark-complete-color);
    }


    .menu-container {
        height: 58px;
    }



    <?php
    $register_sidebars = get_option('sidebars_widgets');
    foreach ($register_sidebars as $sidebar_id => $value) {
        $is_multiple_widgets = has_multiple_widgets_in_sidebar($sidebar_id);
        if ($is_multiple_widgets && $sidebar_id != 'fc-sidebar') {
            echo ('.' . $sidebar_id . ' .widget{ border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) }');
            echo "\n";

        }
    }
    ?>
</style>


<body dir="rtl" class="bg-main px-1 row-gap-2">

    <!-- header -->
    <header id ="main-header" class="d-flex justify-content-center  box-style-white1 header-box my-1 my-xl-2 my-md-2 py-1" style="background-color:var(--i8-light-primary)">
        <div class="row container">
            <div class="col-14 col-xl-20 col-sm-20 px-0">

                <div class="d-flex gap-4">
                    <a href="<?php echo bloginfo('url') ?>" title="<?php bloginfo('title'); ?> " class="logo">
                        <img width="183" height="53" class="header-logo"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/global/logo.webp" alt="logo" />
                    </a>
                    <div class="d-none d-xl-flex d-lg-none d-md-none flex-row col-21 menu-container">
                        <?php build_custom_menu_by_location('primary'); ?>
                    </div>
                </div>


            </div>

            <!-- Tools Btn -->
            <div
                class="d-flex col-10 col-xl-4 col-lg-4 col-md-4 px-0 justify-content-end align-items-center gap-1 gap-xl-2 gap-md-2">

                <a href="#"
                    class="dark-mode-switch  px-1 px-lg-0 px-sm-1 round-icon d-flex justify-content-center align-items-center"
                    alt="dark mode button" aria-label="dark mode button">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        fill="var(--i8-light-fg-color)" class="bi bi-brightness-high" viewBox="0 0 18 18">
                        <path
                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                    </svg>
                </a>
                <a href="<?php echo home_url('/?s'); ?>"
                    class=" px-1 px-lg-0 px-sm-1 round-icon d-flex justify-content-center align-items-center"
                    alt="search button" aria-label="search button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="var(--i8-light-fg-color)"
                        class="bi bi-search" viewBox="0 0 18 18">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </a>
                <?php i8_mobile_menu('mobile', 'round-icon ', array('21', '21')); ?>
            </div>
            <!-- End Tools Btn -->

        </div>
    </header>
    <!-- end hader -->