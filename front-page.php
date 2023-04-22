<?php get_header(); ?>
<div id="ttr_main" class="home-page row">
    <div class="col-12 p-0">
        <?php
        $param = array(
            'limit' => 5,
        );
        $banners = pods('banner', $param);

        if ($banners->total() > 0) :
        ?>
            <div id="carouselSliderBanner" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php for ($i = 0; $i < $banners->total(); $i++) : ?>
                        <li data-target="#carouselSliderBanner" data-slide-to="$i" <?= ($i == 0 ? 'class="active"' : ""); ?>></li>
                    <?php endfor; ?>
                </ol>
                <div class="carousel-inner">
                    <?php
                    $i = 0;
                    while ($banners->fetch()) :
                        $banner = $banners->field('banner');
                        $post = $banners->field('postagem');
                    ?>
                        <div class="carousel-item <?= ($i == 0 ? "active" : ""); ?>" style="background-image: url('<?= wp_get_attachment_image_url($banner['ID'], "full"); ?>')">
                            <a href="<?= get_the_permalink($post['ID']) ?>">
                                <div class="carousel-caption text-left p-2 w-100" style="background: rgba(0,0,0,0.75)">
                                    <h2 class="display-3"><?= $banners->field('title') ?></h2>
                                    <p class="lead d-none d-md-block"><?= $banners->field('apresentacao') ?></p>
                                </div>
                            </a>
                        </div>
                    <?php $i++;
                    endwhile;
                    ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="col-12">
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
        ?><h2 class="d-none"><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            <?php
            endwhile;
        else :
            ?>
            <p><?php _e('Desculpe, nada foi encontrado com esses paramêtros.'); ?></p>
        <?php
        endif;
        wp_reset_query()
        ?>
    </div>

    <?php
    $ultimos = get_posts(array('numberposts' => 12, 'post_type' => 'post', 'post_status' => 'publish'));
    $tamanho = count($ultimos);
    if ($ultimos) :
    ?>
        <div class="col-12">
            <div class="row">
                <div class="col-12  d-block my-2">
                    <h2 class="float-left mx-1 d-block">Nossas últimas postagens</h2>
                    <hr class="wp-block-separator has-text-color has-background" style="background-color:#db9000;color:#db9000">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="carouselControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($ultimos as $post) {
                                setup_postdata($post);
                                $string = "<div class='col-12 col-md-4'>
                        <div class='card my-1 my-md-0 bg-grey box-shadow'>" .
                                    get_the_post_thumbnail($post, 'blog-header', array('class' => 'card-img-top', 'alt' => get_the_title())) .
                                    "<div class='card-body'>
                                <strong class='d-inline-block mb-2'>";
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    $string .= '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
                                }
                                $string .=               "</strong>
                                <h3>
                                    <b><a href='" . get_the_permalink() . "'>" . get_the_title() . "</a></b>
                                </h3>
                                <p class='card-text mb-auto d-none d-md-block'>" . get_the_excerpt() . "</p>
                                <a class='btn btn-warning' href='" . get_the_permalink() . "'>Leia mais...</a>
                            </div>              
                        </div>
                    </div>";
                                $cards[] = $string;
                            }
                            for ($i = 0; $i <= abs($tamanho / 3); $i++) : ?>
                                <div class="carousel-item <?= ($i == 0 ? "active" : ""); ?>">
                                    <div class="row d-flex justify-content-around">
                                        <?php for ($j = $i * 3; $j < ($i + 1) * 3; $j++) :  ?>
                                            <?= $cards[$j]; ?>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                    <div class="text-center my-4"><a href="<?= site_url("blog") ?>">
                            <h5>Acesse todas as postagens</h5>
                        </a></div>

                </div>
            </div>
        <?php
    endif;
    wp_reset_query()
        ?>
        </div>
</div>
<?php get_footer(); ?>