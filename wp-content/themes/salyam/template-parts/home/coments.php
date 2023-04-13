<div class="container-fluid">
    <div class="row no-gutters overflow-hidden">
        <div class="col-md-8 col-12 h-100">
            <div class="container h-100">
                <div class="row justify-content-start align-items-center h-100 pt-5">
                    <div class="col-12 d-flex justify-content-start align-items-center h-100">
                        <?php
                        $args = array(
                            'post_type' => array('comentarios'),
                            'showposts' => -1
                        );
                        $slides = get_posts($args);
                        ?>
                        <div class="container h-100">
                            <div class="row justify-content-center h-100">
                                <div class="col-md-10  col-12 d-flex justify-content-center align-items-center h-100">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-start align-items-center">
                                                <h1 class="about-title text-yellow  ">
                                                    <?= __('Comentarios') ?>
                                                </h1>
                                            </div>
                                            <div class="swiper myComents">
                                                <div class="swiper-wrapper">
                                                    <?php
                                                    foreach ($slides as $post) : setup_postdata($post) ?>
                                                        <div class="swiper-slide">
                                                            <p class="subtitulo-slide fs-5 text-muted pb-3 text-start">
                                                                <?=
                                                                wp_strip_all_tags(get_the_content())
                                                                ?>
                                                            </p>
                                                        </div>
                                                    <?php endforeach;
                                                    wp_reset_postdata(); ?>
                                                </div>
                                                <div class="swiper-pagination pt-5"></div>
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
        <div class="col-md-4 col-12 px-0  d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row p-5">
                    <div class="col-12 d-flex justify-content-center">
                        <h3 class="about-title text-yellow  ">
                            <?= __('Envíanos tu opinión') ?>
                        </h3>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <?= do_shortcode('[forminator_form id="49"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SOCIOS Y COLABORADORES-->
<div class="container-fluid pb-4">
    <div class="row no-gutters overflow-hidden justify-content-center align-items-center">
        <div class="col-md-4 col-12">
            <div class="row p-5 justify-content-center">
                <div class="col-6 d-flex justify-content-center">
                    <h3 class="about-title socios-color  text-center ">
                        <?= __('Socios y colaboradores') ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-12 px-0  d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="container">
                    <div class="row justify-content-start align-items-center pt-5">
                        <div class="col-12 d-flex justify-content-start align-items-center">
                            <?php
                            $args = array(
                                'post_type' => array('socios'),
                                'showposts' => -1
                            );
                            $slides = get_posts($args);
                            ?>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-10  col-12 d-flex justify-content-center align-items-center">
                                        <div class="container">
                                            <div class="row">
                                                <div class="swiper mySocios">
                                                    <div class="swiper-wrapper">
                                                        <?php
                                                        foreach ($slides as $post) : setup_postdata($post) ?>
                                                            <div class="swiper-slide image_socios ">
                                                                <img src="<?= get_the_post_thumbnail_url() ?>">
                                                            </div>
                                                        <?php endforeach;
                                                        wp_reset_postdata(); ?>
                                                    </div>
                                                    <div class="swiper-pagination pt-5"></div>
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
        </div>
    </div>
</div>