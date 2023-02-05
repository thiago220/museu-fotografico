<?php get_header(); ?>
<div class="col">
	<div class="bg-dark text-secondary py-5 text-center">
        <div class="py-5">
            <h2 class="display-5 fw-bold text-white"><?php bloginfo('name'); ?></h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4"><?php bloginfo('description'); ?></p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Pesquisa avançada</button>
                    <button type="button" class="btn btn-outline-light btn-lg px-4">Últimas notícias</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part( 'partials/search', 'advanced-form' );?>

<?php get_template_part( 'partials/news', 'header' );?>

<?php get_footer(); ?>