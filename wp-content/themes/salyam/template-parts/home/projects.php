<div class="container-fluid py-5">
    <div class="row ">
        <div class="col-12 d-flex justify-content-center py-5">
            <h1 class="about-title text-yellow  ">
                <?= get_field('title_projects') ?>
            </h1>
        </div>
    </div>
    <div class="row p-0 py-5 no-gutters overflow-hidden">
        <div class="card mb-3 w-100 custom-card">
            <div class="row no-gutters">
                <div class="col-md-8 px-0 img-div">
                    <img src="<?= get_the_post_thumbnail_url(get_field('main_project')) ?>" class="card-img custom-card h-100" alt="...">
                </div>
                <div class="col-md-4 px-0 bg-purple d-flex justify-content-center align-items-center">
                    <div class="card-body p-5 mx-2 d-flex flex-column">
                        <h2 class="card-title about-title text-white "><?= get_the_title(get_field('main_project')) ?></h2>
                        <p class="card-text about-content pt-3 fs-6 text-white text-resume"><?= wp_strip_all_tags(get_the_content(null, false, get_field('main_project'))) ?></p>
                        <p class="text-center pt-5 mt-auto">
                            <a href="<?= get_field('projects_page') ? get_field('projects_page'): '#'; ?>" class="btn btn-light rounded ps-3  pe-3 rounded-pill text-center fs-6 about-title text-muted">Ver todos</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>