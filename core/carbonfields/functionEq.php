<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_eq_start' );
function crb_eq_start() {
    Container::make( 'post_meta', __( 'Осознанность & EQ' ) )
        ->where('post_template', '=', 'template-eq.php')
        ->add_tab( __('Текст верхнего блока') ,array(
            Field::make( 'text', 'eq_title_top', 'Заголовок' )
                ->set_width(50),
            Field::make("image", "img_eq", "Картинка верхнего блока")
                ->set_width(50),
            Field::make( 'rich_text', 'eq_text_top', __( 'Текст' ) )
        ) )
        ->add_tab( __('Текст'), array(
            Field::make( 'text', 'eq_title_top_contr', 'Заголовок' ),
            Field::make( 'rich_text', 'eq_text_top_contr', __( 'Текст контроллера' ) )
        ) );
    Container::make( 'post_meta', __( 'Контент модального окна' ) )
        ->where('post_template', '=', 'template-eq.php')
        ->add_tab( __('Для вашей компании') ,array(
            Field::make( 'text', 'eq__poup_title', 'Заголовок' )
                ->set_width(50),
            Field::make( 'rich_text', 'eq_poup_text', __( 'Текст' ) )
        ) )
        ->add_tab( __('Для вас') ,array(
            Field::make( 'text', 'eq__poup_title_two', 'Заголовок' )
                ->set_width(50),
            Field::make( 'rich_text', 'eq_poup_text_two', __( 'Текст' ) )
        ) );
    Container::make( 'post_meta', 'Страница 1' )
        ->where('post_template', '=', 'template-eq.php')
        ->add_fields(array(
            Field::make_complex( 'complex_tab', 'Верхние вкладки')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('image', 'tab_image', 'Картинка')
                        ->set_value_type('url')
                        ->set_width(24),
                    Field::make('text', 'tab_name', 'Название вкладки')
                        ->set_width(24),
                    Field::make( "set", "crb_adv_side", "Цвет вкладки" )
                        ->add_options( array(
                            'white'     => 'Белый',
                        ) )
                        ->set_width(24),
                    Field::make( "checkbox", "crb_tab_include", "Показать вкладку" )
                        ->set_option_value('yes')
                        ->set_width(24),
                )),
            Field::make_complex('complex_page_eq', 'Добавление левых вкладок и содержания')
                ->add_fields(array(
                    Field::make_complex('complex_box_eq', 'Конейнеры')
                        ->set_layout('tabbed-vertical')
                        ->add_fields('left_tab', 'Контейнер', array(
                            Field::make('text', 'box_name', 'Название контейнера')
                                ->set_width(33),
                            Field::make("image", "img_what", "Картинка верхнего блока")
                                ->set_width(33),
                            Field::make_complex('complex_tab_left_eq', 'Контейнер')
                                ->add_fields(array(
                                    Field::make('text', 'left_tab_name_eq', 'Название вкладки'),
                                    Field::make_complex('complex_content_eq', 'Контент')

                                        ->add_fields(array(
                                            Field::make('text', 'what_this', 'Заголовок'),
                                            Field::make('rich_text', 'text_point', 'Текст Суть')
                                                ->set_width(50)
                                                ->set_rows(4),
                                            Field::make('rich_text', 'text_goal', 'Текст Цель')
                                                ->set_width(50)
                                                ->set_rows(4),
                                            Field::make('rich_text', 'text_raisin', 'Текст Изюм')
                                                ->set_rows(4),
                                            Field::make('rich_text', 'leader_text', __('Текст')),
                                            Field::make_complex('complex_accord', 'Аккордион')
                                                ->set_layout('tabbed-vertical')
                                                ->add_fields(array(
                                                    Field::make('text', 'level_accord', 'Уровень'),
                                                    Field::make('text', 'title_accord', 'Заголовок аккардеона'),
                                                    Field::make('rich_text', 'text_accord', __('Текст аккардеона'))
                                                )),
                                            Field::make_complex('complex_table_eq', 'Таблица')
                                                ->add_fields(array(
                                                    Field::make_complex('slide_container', 'Блок таблицы')
                                                        ->set_layout('tabbed-vertical')
                                                        ->add_fields(array(
                                                            Field::make_complex('table_container', 'Контейнер таблицы')
                                                                ->set_layout('tabbed-vertical')
                                                                ->add_fields(array(
                                                                    Field::make('text', 'head_table' ,'Заголовок'),
                                                                    Field::make('rich_text', 'text_table' ,'Текст'),
                                                                ))
                                                        ))
                                                ))
                                        ))
                                ))
                        ))
                ))
        ));
    Container::make( 'post_meta', 'Страница 2' )
        ->where('post_template', '=', 'template-eq.php')
        ->add_fields(array(
            Field::make_complex( 'complex_tab_two', 'Верхние вкладки')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('image', 'tab_image', 'Картинка')
                        ->set_value_type('url')
                        ->set_width(24),
                    Field::make('text', 'tab_name', 'Название вкладки')
                        ->set_width(24),
                    Field::make( "set", "crb_adv_side_two", "Цвет вкладки" )
                        ->add_options( array(
                            'white'     => 'Белый',
                        ) )
                        ->set_width(24),
                    Field::make( "checkbox", "crb_tab_include", "Показать вкладку" )
                        ->set_option_value('yes')
                        ->set_width(24),
                )),
            Field::make_complex( 'complex_page_eq_two', 'Добавление левых вкладок и содержания')
                ->add_fields(array(
                    Field::make_complex( 'complex_box_eq_two', 'Конейнеры')
                        ->set_layout('tabbed-vertical')
                        ->add_fields('left_tab', 'Контейнер',array(
                            Field::make('text', 'box_name', 'Название контейнера')
                                ->set_width(33),
                            Field::make("image", "img_what_two", "Картинка верхнего блока")
                                ->set_width(33),
                            Field::make_complex( 'complex_tab_left_eq_two', 'Контейнер')
                                ->add_fields(array(
                                    Field::make('text', 'left_tab_name_eq', 'Название вкладки'),
                                    Field::make_complex( 'complex_content_eq_two', 'Контент')
                                        ->add_fields(array(
                                            Field::make('text', 'what_this_two', 'Заголовок'),
                                            Field::make('rich_text', 'text_point_two', 'Текст Суть')
                                                ->set_width(50)
                                                ->set_rows(4),
                                            Field::make('rich_text', 'text_goal_two', 'Текст Цель')
                                                ->set_width(50)
                                                ->set_rows(4),
                                            Field::make('rich_text', 'text_raisin_two', 'Текст Изюм')
                                                ->set_rows(4),
                                            Field::make( 'rich_text', 'leader_text_two', __( 'Текст' ) ),
                                            Field::make_complex('complex_accord_eq', 'Аккордион')
                                                ->set_layout('tabbed-vertical')
                                                ->add_fields(array(
                                                    Field::make('text', 'level_accord', 'Уровень'),
                                                    Field::make('text', 'title_accord', 'Заголовок аккардеона'),
                                                    Field::make('rich_text', 'text_accord', __('Текст аккардеона'))
                                                )),
                                            Field::make_complex('complex_table_eq_two', 'Таблица')
                                                ->add_fields(array(
                                                    Field::make_complex('slide_container', 'Блок таблицы')
                                                        ->set_layout('tabbed-vertical')
                                                        ->add_fields(array(
                                                            Field::make_complex('table_container', 'Контейнер таблицы')
                                                                ->set_layout('tabbed-vertical')
                                                                ->add_fields(array(
                                                                    Field::make('text', 'head_table' ,'Заголовок'),
                                                                    Field::make('rich_text', 'text_table' ,'Текст'),
                                                                ))
                                                        ))
                                                ))
                                        ))
                                ))
                        ))
                ))
        ));
}
