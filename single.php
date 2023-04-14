<?php get_header(); ?>
<div class="row py-3">    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
                <h2 class="my-3"><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
            </div>
        <?php
        endwhile;
    else:
        ?>
        <p><?php _e('Desculpe, nada foi encontrado com esses paramêtros.'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>