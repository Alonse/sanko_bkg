<?php
add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type('event', array(
        'labels' => array(
            'name'               => 'События', // основное название для типа записи
            'singular_name'      => 'События', // название для одной записи этого типа
            'add_new'            => 'Добавить событие', // для добавления новой записи
            'add_new_item'       => 'Добавление события', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование события', // для редактирования типа записи
            'new_item'           => 'Новое событие', // текст новой записи
            'view_item'          => 'Смотреть событие', // для просмотра записи этого типа.
            'search_items'       => 'Искать событие', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'События', // название меню
        ),
        'description'         => 'События',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title'), // 'title','editor','author','thumbnail','eaaaaxcerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );

    register_taxonomy('status', array('event'), array(
        'label'                 => 'Статус события',
        'labels'                => array(
            'name'              => 'Статус событий',
            'singular_name'     => 'Статус событий',
            'search_items'      => 'Искать статус',
            'all_items'         => 'Все статусы',
            'edit_item'         => 'Редактировать статус',
            'update_item'       => 'Обновить статус',
            'add_new_item'      => 'Добавить статус',
            'new_item_name'     => 'Заголовок',
            'menu_name'         => 'Статус событий',
        ),
        'description'           => 'Статус событий',
        'public'                => true,
        'show_in_nav_menus'     => true,
        'show_ui'               => true,
        'show_tagcloud'         => false,
        'hierarchical'          => true,
        'rewrite'               => array( 'hierarchical' => true ),
        'show_admin_column'     => true,
    ) );
}
