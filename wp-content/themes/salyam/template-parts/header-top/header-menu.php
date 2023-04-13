<?php
$menu_obj = wp_get_nav_menu_object('main-menu');
$pages = wp_get_nav_menu_items($menu_obj->term_id);
$logo = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($logo, 'full');
$image_url = $image[0];
$image_url =  $image_url  ? $image_url : get_template_directory_uri() . "/assets/images/default_logo.png";
?>
<div class="container-fluid fixed-top shadow-lg p-0 bg-white">
    <div class="top p-0 m-0">

    </div>
    <div class="row">
        <div class="ps-2 container d-none d-lg-block ">
            <div class="row h-100 ps-2">
                <div class="col-2">
                    <a href="<?= get_home_url(); ?>">
                        <img class="img-fluid p-4 d-md-block d-none logo" src=" <?= $image_url ? $image_url : get_template_directory_uri() . "/assets/images/default_logo.png" ?>">
                    </a>
                </div>
                <div class="col-xxl-6 col-xl-5 d-flex justify-content-start align-items-center ">
                    <div class="container">
                        <div class="row position-relative  ">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <nav class=" navbar navbar-expand-lg navbar-light rounded" aria-label="main menu">
                                    <div class="container-fluid mx-auto">
                                        <button class="navbar-toggler float-sm-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse justify-content-md-center align-items-center" id="navbarsExample10">
                                            <ul class="navbar-nav ">
                                                <?php
                                                $increment = 0;
                                                for ($i = 0; $i < count($pages); $i++) :
                                                    $page = $pages[$i];

                                                    if (!empty($page->menu_item_parent)) continue;
                                                    $active = '';
                                                    if (is_page($page->object_id)) {
                                                        $active = 'active';
                                                    }
                                                    $childs = get_posts(array(
                                                        'showposts' => -1,
                                                        'post_type' => 'nav_menu_item',
                                                        'orderby' => 'menu_order',
                                                        'order' => 'ASC',
                                                        'meta_query' => array(
                                                            array(
                                                                'key' => '_menu_item_menu_item_parent',
                                                                'value' => $page->ID,
                                                                'compare' => '='
                                                            )
                                                        ),
                                                    ));
                                                    if (empty($childs) || count($childs) <= 0) : ?>
                                                        <li class="nav-item text-uppercase <?= $active ?> pl-2 pr-2">
                                                            <a href="<?= $page->url ?>" id="link<?= $i ?>" class="nav-link"><?= $page->title ?></a>
                                                        </li>
                                                    <?php
                                                    else : ?>
                                                        <li class="nav-item dropdown">
                                                            <a href="<?= $page->url ?>" id="link<?= $i ?>" class="nav-link dropdown-toggle text-uppercase" id="<?= $page->title ?>" data-toggle="dropdown"><?= $page->title ?>&nbsp;&nbsp;|</a>
                                                            <ul class="dropdown-menu" aria-labelledby="<?= $page->title ?>">
                                                                <?php foreach ($childs as $child) :
                                                                    $child_page_id = get_post_meta($child->ID, '_menu_item_object_id', true);
                                                                    $child_page = get_post($child_page_id);
                                                                    $url = get_page_link($child_page->ID);
                                                                    $active = '';
                                                                    if (is_page($child_page->ID)) {
                                                                        $active = 'active';
                                                                    }
                                                                ?>
                                                                    <li><a class="dropdown-item text-uppercase" href="<?= $url ?>"><?= $child_page->post_title ?></a></li>
                                                                <?php
                                                                endforeach; ?>
                                                            </ul>
                                                        </li>
                                                    <?php
                                                    endif; ?>
                                                <?php
                                                endfor;
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5 d-flex align-items-center ">
                    <div class="container">
                        <div class="row align-items-center justify-content-start">
                            <div class="col-6">
                                <?php
                                get_template_part('template-parts/generic/item-icon', 'icon-empleo', array(
                                    'url' => '#',
                                    'text' => 'Bolsa de empleo',
                                    'icon' => 'icon-bolsa-empleo '
                                ));
                                ?>
                            </div>
                            <div class="col-4">
                                <?php
                                get_template_part('template-parts/generic/item-icon', 'icon-buscar', array(
                                    'url' => '#',
                                    'text' => 'Buscar',
                                    'icon' => 'icon-buscar'
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-mobile d-block d-lg-none ">
            <div class="row">
                <div class="col">
                    <div class="offcanvas offcanvas-start container-mobile w-75" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
                        <div class="offcanvas-header header-color">
                            <a href="<?= get_home_url(); ?>">
                                <img class="img-fluid p-1 w-75" src=" <?= $image_url ?>" />
                            </a>
                            <button class="navbar-toggler navbar-toggler-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="offcanvas-body px-0">
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start pb-5" id="menu">
                                <?php
                                $increment = 0;
                                for ($i = 0; $i < count($pages); $i++) :
                                    $page = $pages[$i];

                                    if (!empty($page->menu_item_parent)) continue;
                                    $active = '';
                                    if (is_page($page->object_id)) {
                                        $active = 'active';
                                    }
                                    $childs = get_posts(array(
                                        'showposts' => -1,
                                        'post_type' => 'nav_menu_item',
                                        'orderby' => 'menu_order',
                                        'order' => 'ASC',
                                        'meta_query' => array(
                                            array(
                                                'key' => '_menu_item_menu_item_parent',
                                                'value' => $page->ID,
                                                'compare' => '='
                                            )
                                        ),
                                    ));
                                    if (empty($childs) || count($childs) <= 0) : ?>
                                        <li class="nav-item  <?= $active ?> pl-2 pr-2">
                                            <a href="<?= $page->url ?>" id="link<?= $i ?>" class="nav-link "><?= $page->title ?></a>
                                        </li>
                                    <?php
                                    else : ?>
                                        <li class="nav-item dropdown">
                                            <a href="<?= $page->url ?>" id="link<?= $i ?>" class="nav-link dropdown-toggle " id="<?= $page->title ?>" data-toggle="dropdown"><?= $page->title ?>&nbsp;&nbsp;|</a>
                                            <ul class="dropdown-menu" aria-labelledby="<?= $page->title ?>">
                                                <?php foreach ($childs as $child) :
                                                    $child_page_id = get_post_meta($child->ID, '_menu_item_object_id', true);
                                                    $child_page = get_post($child_page_id);
                                                    $url = get_page_link($child_page->ID);
                                                    $active = '';
                                                    if (is_page($child_page->ID)) {
                                                        $active = 'active';
                                                    }
                                                ?>
                                                    <li><a class="dropdown-item " href="<?= $url ?>"><?= $child_page->post_title ?></a></li>
                                                <?php
                                                endforeach; ?>
                                            </ul>
                                        </li>
                                    <?php
                                    endif; ?>
                                <?php
                                endfor;
                                ?>


                            </ul>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-between ">
                            <div class="col-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvas">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                                </svg>
                            </div>
                            <div class="col-8 p-1">
                                <!-- toggler -->
                                <div class="conatiner">
                                    <div class="row">
                                        <a href="<?= get_home_url(); ?>" class="logo text-center">
                                            <img class="img-fluid" src="<?= $image_url ?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>