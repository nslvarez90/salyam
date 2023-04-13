<div class="container-fluid bg-about-us py-5">
    <div class="row justify-content-center pt-2">
        <div class="container">
            <div class="row justify-content-center pt-5 pb-5">
                <div class="col-8 d-flex justify-content-center">
                    <h1 class="about-title text-muted">
                        <?= get_field('title_about') ?>
                    </h1>
                </div>
                <div class="col-10 d-flex justify-content-center pt-3">
                    <h4 class="about-subtitle text-muted">
                        <?= get_field('subtitle_about') ?>
                    </h4>
                </div>
                <div class="col-10  pt-3">
                    <p class="about-content fs-6 text-muted">
                        <?=
                        wp_strip_all_tags(get_field('description_about'))
                        ?>
                    </p>
                </div>
                <div class="col-8 d-flex justify-content-center pt-3">
                    <p class="pt-2 sub-titulos <?= get_field('view_more_about') ? 'd-block' : 'd-none' ?>"><a class="btn btn-secondary rounded boton-slide" href="<?= get_field('view_more_about')  ?>" style="padding-left: 30px;padding-right: 30px;">Ver</a></p>
                </div>
            </div>
        </div>
    </div>
</div>