<?php get_header(); ?>
<div class="py-3">
    <h1 class="d-none"><?php the_title(); ?></h1>
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
    <div id="ttr_main" class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col">
                    <?php the_content(); ?>
                </div>
                <?php
            endwhile;
        else:
            ?>
            <p><?php _e('Desculpe, nada foi encontrado com esses paramêtros.'); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>