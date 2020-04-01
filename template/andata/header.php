<!DOCTYPE html>
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--    <title>--><?php //wp_title('', false, ''); ?><!-- --><?php //bloginfo('name'); ?><!--</title>-->
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>

<div class="wrapper">

    <nav class=" navbar navbar-light navbar-expand-md fixed-top">
        <div class="container">
            <a class="navbar-brand text-uppercase button_medium" href="/">
                <strong class="">Andata</strong>&nbsp;digital passport
            </a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class=""> <img src="<?=get_template_directory_uri()?>/assets/img/Vector.svg" alt=""></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navcol-1">
                <div class="nav navbar-nav">
                    <?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
                </div>
            </div>
        </div>
    </nav>