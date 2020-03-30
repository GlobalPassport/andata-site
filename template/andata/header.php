<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
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


