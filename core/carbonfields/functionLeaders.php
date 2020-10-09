<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_leader_start' );
function crb_leader_start()
{
    Container::make('post_meta', __('Развитие лидеров'))
        ->where('post_template', '=', 'template-reclamation-leaders.php')
        ->add_tab(__('Первый блок'), array(
            Field::make('text', 'leader_title_top', 'Заголовок')
                ->set_width(50),
            Field::make("image", "img_leader", "Картинка верхнего блока")
                ->set_width(50),
            Field::make('rich_text', 'leader_text_top', __('Текст'))
        ));

    Container::make('post_meta', 'Вкладки')
        ->where('post_template', '=', 'template-reclamation-leaders.php')
        ->add_fields(array(
            Field::make_complex('complex_tab', 'Верхние вкладки')
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
            Field::make_complex('complex_page', 'Добавление левых вкладок и содержания')
                ->add_fields(array(
                    Field::make_complex('complex_box', 'Конейнеры')
                        ->set_layout('tabbed-vertical')
                        ->add_fields('left_tab', 'Контейнер', array(
                            Field::make('text', 'box_name', 'Название контейнера')
                                ->set_width(33),
                            Field::make("image", "img_what", "Картинка верхнего блока")
                                ->set_width(33),
                            Field::make_complex('complex_tab_left', 'Контейнер')
                                ->add_fields(array(
                                    Field::make('text', 'left_tab_name', 'Название вкладки'),
                                    Field::make_complex('complex_content', 'Контент')
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
                                            Field::make_complex('complex_accord', 'Аккордеон')
                                                ->set_layout('tabbed-vertical')
                                                ->add_fields(array(
                                                    Field::make('text', 'level_accord', 'Уровень'),
                                                    Field::make('text', 'title_accord', 'Заголовок аккардеона'),
                                                    Field::make('rich_text', 'text_accord', __('Текст аккардеона'))
                                                )),
                                            Field::make_complex('complex_table', 'Таблица')
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