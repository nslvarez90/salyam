<?php

$args = array(
    'post_type' => array('slider'),
    'showposts' => -1
);
$slides = get_posts($args);
?>
<?php if (count($slides) > 0) : ?>
    <div class="container-fluid p-0 header-height overflow-hidden">
        <div class="row ">
            <div id="homeSlider" class="carousel slide h-100 w-100" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php for ($i = 0; $i < $total; $i++) : ?>
                        <button type="button" data-bs-target="#homeSlider" data-bs-slide-to="<?= $i ?>" class="<?= $i == 0 ? 'active' : '' ?>" aria-current="<?= $i == 0 ? 'true' : '' ?>" aria-label="Slide .<?= $i ?>"></button>
                    <?php endfor; ?>
                </div>
                <div class="carousel-inner">
                    <?php $cont = 0;
                    foreach ($slides as $post) : setup_postdata($post) ?>
                        <div class="carousel-item <?= $cont++ == 0 ? 'active' : '' ?>">
                            <img src="<?= get_the_post_thumbnail_url() ?>" class="slide-img" />
                            <div class="carousel-caption text-center">
                                <p class="pt-2 subtitulo-slide"><?= wp_strip_all_tags(get_the_content()) ?></p>
                                <h1 class="titulo-slide text-white "><?= get_the_title() ?></h1>
                                <p class="pt-2 sub-titulos <?= get_field('enlace') ? 'd-block' : 'd-none' ?>"><a class="btn btn-light rounded boton-slide fs-6" href="<?= get_field('enlace')  ?>" style="padding-left: 35px;padding-right: 35px;">Ver</a></p>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#homeSlider" data-bs-slide="prev">
                    <span class="next-prev" aria-hidden="true"><span class="carousel-control-prev-icon" aria-hidden="true"></span></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#homeSlider" data-bs-slide="next">
                    <span class="next-prev" aria-hidden="true"> <span class="carousel-control-next-icon" aria-hidden="true"></span></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
                <div class="my-top-degree w-100 my-margin-slide">
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>