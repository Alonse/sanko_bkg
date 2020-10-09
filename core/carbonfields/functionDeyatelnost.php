<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_couch' );
function crb_attach_couch() {
    Container::make( 'post_meta', 'Настройки страницы')
        ->show_on_post_type( array('page','event') )
        ->add_tab( __('Иконки') ,array(
            Field::make('image', 'icon_page', 'Иконка страницы')
                ->set_value_type('url')
                ->set_width(33),
            Field::make('image', 'icon_arrow', 'Иконка стрелки')
                ->set_value_type('url')
                ->set_width(33),
            Field::make('image', 'background', 'Задняя картинка')
                ->set_value_type('url')
                ->set_width(33),

        ) )
        ->add_tab(__('Цвет продуктовых страниц'),array(
            Field::make('color', 'colors_el', 'Выбрете цвет основных элементов'),
            Field::make('color', 'colors_dop_el', 'Выбрете цвет доп. элементов'),
        ));
}