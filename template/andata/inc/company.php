<?php

add_action( 'init', 'true_register_post_type_init' ); // Использовать функцию только внутри хука init

function true_register_post_type_init() {
    $labels = array(
        'name' => 'Компании',
        'singular_name' => 'Компанию', // админ панель Добавить->Функцию
        'add_new' => 'Добавить компанию',
        'add_new_item' => 'Добавить новую компанию', // заголовок тега <title>
        'edit_item' => 'Редактировать компанию',
        'new_item' => 'Новая компания',
        'all_items' => 'Все компании',
        'view_item' => 'Просмотр компании на сайте',
        'search_items' => 'Искать компании',
        'not_found' =>  'Компаний не найдено.',
        'not_found_in_trash' => 'В корзине нет компаний.',
        'menu_name' => 'Компании' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'exclude_from_search' => true,
        'menu_icon' => 'dashicons-groups', // иконка в меню
        'menu_position' => 100, // порядок в меню
        'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail','custom-fields')
    );
    register_post_type('company', $args);
}



