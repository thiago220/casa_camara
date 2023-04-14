<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" >
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" >
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <script src="https://use.fontawesome.com/a34e4b7993.js"></script>


        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() ?>/images/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="container-fluid">
            <div class="row">  
                <div class="col">
                    <a class="m-3" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/images/logo-CC-c-sf-275x60.png' ?>" alt="Casa Câmara"></a>
                </div> 
            </div>

            <div class="row">
                <div class="col">
                    <nav class="navbar fixed-top navbar-expand-lg bg-dark d-lg-none">
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                        <button class="navbar-toggler menu-ret" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/casa-camara" ?>"><span style="display: inline; font-size: 0.9rem; font-family: MarcaCasaCamara">Casa Câmara</a></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/studio-futon" ?>">StudioFuton</a>                                
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/rodrigo-camara" ?>">Rodrigo Câmara</a>
                                </li>  
                                <li class="nav-item dropdown">                                    
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Instagram</a>   
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" target="_blank" href="https://www.instagram.com/casa.camara/"><i class="fa fa-instagram"></i>  casa.camara</a>
                                        <a class="dropdown-item" target="_blank" href="https://www.instagram.com/machineta/"><i class="fa fa-instagram"></i>  machineta</a>
                                        <a class="dropdown-item" target="_blank" href="https://www.instagram.com/studiofuton/"><i class="fa fa-instagram"></i>  studiofuton</a>
                                        <a class="dropdown-item" target="_blank" href="https://www.instagram.com/teencontroemouropretomg/"><i class="fa fa-instagram"></i>  teencontroemouropretomg</a>
                                    </div>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/blog" ?>">Blog</a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/contato" ?>">Contato</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/minha-conta" ?>">Minha Conta</a>
                                </li>                        
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/carrinho" ?>">Carrinho</a>
                                </li>
                            </ul>
                            <form role="search" class="my-1" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control input-search" name="s" type="search" placeholder="Procurar produto...">
                                        <span class="input-group-append">
                                            <button type="submit" class="btn btn-search" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <input type="hidden" name="post_type" value="product" />                                
                            </form>
                        </div>
                    </nav>
                </div>
            </div>    

            <div class="row d-none d-lg-block">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-8">
                            <ul class="nav menu-principal">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>">Home</a> 
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/casa-camara" ?>"><span class="d-inline">Casa&nbsp;Câmara</span></a> 
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/studio-futon" ?>">StudioFuton</a> 
                                </li>
                                <li class="nav-item dropdown bg-dark">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" >Rodrigo Câmara</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?= get_site_url() . "/rodrigo-camara" ?>">Quem sou</a>
                                        <a class="dropdown-item" href="<?= get_site_url() . "/cenografia-e-eventos" ?>">Cenografia e eventos</a>
                                        <a class="dropdown-item" href="<?= get_site_url() . "/fotografia-e-ensaios" ?>">Fotografia e ensaios</a>
                                        <a class="dropdown-item" href="<?= get_site_url() . "/exposicoes-e-projetos-especiais" ?>">Exposições e projetos especiais</a>
                                        <a class="dropdown-item" href="<?= get_site_url() . "/cotacao-de-servicos-e-contato" ?>">Cotação de serviços</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">                                    
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Instagram</a>   
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" target="_blank" href="https://www.instagram.com/casa.camara/"><i class="fa fa-instagram"></i>  casa.camara</a>
                                        <a class="dropdown-item" target="_blank" href="https://www.instagram.com/machineta/"><i class="fa fa-instagram"></i>  machineta</a>
                                        <a class="dropdown-item" target="_blank" href="https://www.instagram.com/studiofuton/"><i class="fa fa-instagram"></i>  studiofuton</a>
                                        <a class="dropdown-item" target="_blank" href="https://www.instagram.com/teencontroemouropretomg/"><i class="fa fa-instagram"></i>  teencontroemouropretomg</a>
                                    </div>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/clipping" ?>">Clipping</a> 
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/blog" ?>">Blog</a> 
                                </li>
                                <li class="nav-item dropdown">                                    
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Parceiros</a>   
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" target="_blank" href="https://www.instagram.com/chez.douglas/"><i class="fa fa-instagram"></i>  chez.douglas</a>
                                        <a class="dropdown-item" target="_blank" href="https://www.instagram.com/acaso85ouropreto/"><i class="fa fa-instagram"></i>  acaso85ouropreto</a>
                                        <a class="dropdown-item" target="_blank" href="https://www.instagram.com/nuhous/"><i class="fa fa-instagram"></i>  nuhous</a>                                   
                                    </div>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_site_url() . "/contato" ?>">Contato</a>
                                </li>
                            </ul>
                        </div>                        
                        <div class="col-4">
                            <div class="row">
                                <div class="m-0 p-0 col-lg-10">
                                    <form role="search" class="m-0" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input class="form-control form-control-sm input-search" name="s" type="search" placeholder="Procurar produto...">
                                                <span class="input-group-append">
                                                    <button type="submit" class="btn btn-search" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="post_type" value="product" />                                
                                    </form>
                                </div>
                                <div class="m-0 p-1 col-lg-1">
                                    <a href="https://casacamara.com.br/minha-conta/"><i class="fa fa-user " aria-hidden="true"></i></a>
                                </div>
                                <div class="m-0 p-1 col-lg-1">
                                    <a href="https://casacamara.com.br/carrinho/"><i class="fa fa-shopping-basket " aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="separador"></div>
        <span class="mplayer position-fixed" style="right: 0; top: 50%; z-index: 1100;">
            <button class="music  d-inline"><i class="fa fa-music"></i></button>            
            <div class="cc-player w-100" style="display: none">
                <div class="player-controls">
                    <span class="player-prev"><i class="fa fa-backward"></i></span>
                    <span class="player-play"><i class="fa fa-play"></i></span>
                    <span class="player-pause"><i class="fa fa-pause"></i></span>
                    <span class="player-stop"><i class="fa fa-stop"></i></span>
                    <span class="player-next"><i class="fa fa-forward"></i></span>
                </div>
                <div class="player"></div> 
            </div>
            <script>
                $("button.music").click(function () {
                    $("div.cc-player").toggle('slow');
                });
            </script>
        </span>
        <main class="container">
