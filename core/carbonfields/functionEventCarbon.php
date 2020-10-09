<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_event_start' );
function crb_event_start()
{
    Container::make('post_meta', 'Контент')
        ->where('post_type', '=', 'product')
        ->add_fields(array(
            Field::make_complex('complex_content', 'Контент')
                ->add_fields(array(
                    Field::make('rich_text', 'text_point', 'Текст Суть')
                        ->set_width(33)
                        ->set_rows(4),
                    Field::make('rich_text', 'text_goal', 'Текст Цель')
                        ->set_width(33)
                        ->set_rows(4),
                    Field::make('rich_text', 'text_raisin', 'Текст Изюм')
                        ->set_width(33)
                        ->set_rows(4),
                    Field::make('rich_text', 'event_text', __('Текст')),

//                    Field::make_complex('complex_accord', 'Аккордеон')
//                        ->set_layout('tabbed-vertical')
//                        ->add_fields(array(
//                            Field::make('text', 'title_accord', 'Заголовок аккардеона'),
//                            Field::make('rich_text', 'text_accord', __('Текст аккардеона'))
//                        )),
//                    Field::make_complex('complex_table', 'Таблица')
//                        ->add_fields(array(
//                            Field::make_complex('slide_container', 'Блок таблицы')
//                                ->set_layout('tabbed-vertical')
//                                ->add_fields(array(
//                                    Field::make_complex('table_container', 'Контейнер таблицы')
//                                        ->set_layout('tabbed-vertical')
//                                        ->add_fields(array(
//                                            Field::make('text', 'head_table' ,'Заголовок'),
//                                            Field::make('rich_text', 'text_table' ,'Текст'),
//                                        ))
//                                ))
//                        ))
                ))
        ));
}

add_action( 'carbon_fields_register_fields', 'crb_event_settings' );
function crb_event_settings()
{
    Container::make( 'post_meta', __( 'Настройки' ) )
        ->where('post_type', '=', 'product')
        ->add_fields(array(
            Field::make( 'text', 'event_loc', 'Адрес' )
                ->set_width(45),
            Field::make( 'text', 'event_loc_iframe', 'Ссылка iframe адреса' )
                ->set_width(45),
            Field::make( 'select', 'event_status', 'Продукт' )
                ->set_width(33)
                ->add_options( array(
                    '#fff'  => 'Белый',
                    '#252F3D'  => 'Черный',
                    '#797E84'  => 'Серый',
                    '#8BCC32'  => 'Зеленый',
                    '#0090E1'  => 'Синий',
                    '#EA4719'  => 'Красный',
                    '#F19D38'  => 'Оранжевый',
                ) ),
            Field::make('image', 'logo_event', 'Логотип')
                ->set_value_type('url')
                ->set_width(33),
            Field::make( "select", "type", "Формат" )
                ->add_options( array(
                    'online'  => 'Online',
                    'offline'  => 'Offline',
                ) )
                ->set_width(33),
            Field::make( 'date', 'crb_event_start_date', __( 'Выберите дату начала' ) ),
            Field::make( 'date', 'crb_event_end_date', __( 'Выберите дату окончания' ) ),
            Field::make( 'time', 'start_time', __( 'Выберите время начала' ) )
                ->set_storage_format('H:i')
                ->set_width(50),
            Field::make( 'time', 'end_time', __( 'Выберите время окончания' ) )
                ->set_storage_format('H:i')
                ->set_width(50),
            Field::make( 'text', 'price', 'Цена' )
                ->set_width(50),
            Field::make('text', 'slogan', __('Слоган')),
            Field::make('image', 'logo_icon', 'Логотип')
                ->set_value_type('url')
                ->set_width(33),
        ) );
}

add_action( 'carbon_fields_register_fields', 'crb_event_comment' );
function crb_event_comment()
{
    Container::make( 'post_meta', __( 'Отзывы' ) )
        ->where('post_type', '=', 'product')
        ->add_fields(array(
            Field::make_complex('crb_comment')
                ->add_fields('comment_post', array(
                    Field::make('text', 'text_author' ,'ФИО')
                        ->set_width(50),
                    Field::make('text', 'text_prof' ,'Должность')
                        ->set_width(50),
                    Field::make("image", "photo_author", "Фото")
                        ->set_value_type('url')
                        ->set_width(50),
                    Field::make('rich_text', 'text_comment' ,'Текст комментария')
                ))
        ));
}
