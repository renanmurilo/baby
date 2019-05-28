<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/assets/css/app.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/assets/css/animate.min.css">
    <title><?php echo wp_title(); ?></title>
</head>

<body>
    <header>
        <div class="row col-md-12 navegacao">
            <div class="menu">
                <table>
                    <tr>
                        <td>
                            <a href="<?php echo site_url();?>/index">baby</a>
                        </td>
                        <td>
                            <a href="<?php echo site_url();?>/index">ology</a>
                        </td>
                        <td>
                            <a href="<?php echo site_url();?>/index"><img src="<?php bloginfo('template_url'); ?>/src/assets/images/home/icon.png" alt=""></a>
                        </td>
                    </tr>
                </table>
            </div>
            <nav class="mob hidden-md-up" role="navigation"  >
                <div id="menuToggle">
                    <input type="checkbox"><span class="burge"></span><span class="burge"></span><span class="burge"></span>
                    <ul class="mob" id="menu">
                        <li class="nav-item <?php if ( is_page_template( array( 'fundadora.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/fundadora">Fundadora</a>
                        </li>
                        <li class="nav-item <?php if ( is_page_template( array( 'metodologia.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/metodologia">Metodologia</a>
                        </li>
                        <li class="nav-item dropdown <?php if ( is_page_template( array( 'baby-float.php', 'baby-move.php', 'massagem-psicomotora.php' ) ) ) { echo 'active';} else {} ?>">                        </li>
                        <li><a class="dropdown-item" href="<?php echo site_url();?>/baby-move">&nbsp;&nbsp;&nbsp;Baby Move</a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url();?>/baby-float">&nbsp;&nbsp;&nbsp;Baby Float</a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url();?>/massagem-psicomotora">&nbsp;&nbsp;&nbsp;Massagem psicomotora</a></li>
                        <li class="nav-item <?php if ( is_page_template( array( 'beneficios.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/beneficios">Benefícios</a>
                        </li>
                        <li class="nav-item <?php if ( is_page_template( array( 'eventos.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/eventos">Eventos</a>
                        </li>
                        <li class="nav-item <?php if ( is_page_template( array( 'agendamento.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/agendamento">Agendamentos</a>
                        </li>
                        <li class="nav-item <?php if ( is_page_template( array( 'contato.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="navbar navbar-expand-md hidden-sm-down ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar"
                    aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="textoNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item <?php if ( is_page_template( array( 'fundadora.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/fundadora">Fundadora</a>
                        </li>
                        <li class="nav-item <?php if ( is_page_template( array( 'metodologia.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/metodologia">Metodologia</a>
                        </li>
                        <li class="nav-item dropdown <?php if ( is_page_template( array( 'baby-float.php', 'baby-move.php', 'massagem-psicomotora.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" data-toggle="dropdown" href="">Serviços</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo site_url();?>/baby-move">Baby Move</a>
                                <a class="dropdown-item" href="<?php echo site_url();?>/baby-float">Baby Float</a>
                                <a class="dropdown-item" href="<?php echo site_url();?>/massagem-psicomotora">Massagem psicomotora</a>
                            </div>
                        </li>
                        <li class="nav-item <?php if ( is_page_template( array( 'beneficios.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/beneficios">Benefícios</a>
                        </li>
                        <li class="nav-item <?php if ( is_page_template( array( 'eventos.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/eventos">Eventos</a>
                        </li>
                        <li class="nav-item <?php if ( is_page_template( array( 'agendamento.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/agendamento">Agendamentos</a>
                        </li>
                        <li class="nav-item <?php if ( is_page_template( array( 'contato.php' ) ) ) { echo 'active';} else {} ?>">
                            <a class="nav-link" href="<?php echo site_url();?>/contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="navbar-text hidden-sm-down">
                <a href="https://www.instagram.com/babyologybr" target="_blank"><img
                        src="<?php bloginfo('template_url'); ?>/src/assets/images/home/insta.png" alt=""></a>
                <a href="https://api.whatsapp.com/send?phone=5511994206707" target="_blank"><img
                        src="<?php bloginfo('template_url'); ?>/src/assets/images/home/whats.png" alt=""></a>
            </div>
        </div>
    </header>