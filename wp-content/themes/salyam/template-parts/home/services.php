<?php
$args = array(
    'post_type' => array('servicios'),
    'showposts' => -1
);
$slides = get_posts($args);
?>
<div class="container pt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center pt-5">
            <h1 class="about-title text-yellow">
                <?= get_field('title_services') ?>
            </h1>
        </div>
        <div class="col-10 d-flex justify-content-center pt-3">
            <h5 class="about-subtitle text-muted">
                <?= get_field('services_subtitle') ?>
            </h5>
        </div>
        <div class="col-6 d-flex justify-content-center ">            
            <p class="pt-2 text-muted fs-6 <?= get_field('services_page') ? 'd-block' : 'd-none' ?>"><a class="btn btn-light rounded boton-slide text-muted fs-6" href="<?= get_field('services_page')  ?>" style="padding-left: 30px;padding-right: 30px;">Ver todos ></a></p>  
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                foreach ($slides as $post) : setup_postdata($post) ?>
                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <img src="<?= get_the_post_thumbnail_url() ?>" class="card-img-top custom-card" alt="...">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <h3 class="card-title text-uppercase about-title text-muted d-flex justify-content-center align-items-center" style="min-height: 67.2px;"><?= get_the_title() ?></h2>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>