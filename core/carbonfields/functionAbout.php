<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_about' );
function crb_attach_about()
{
    Container::make( 'theme_options', 'Certificate' )
        ->set_page_parent('themes.php')
        ->add_fields(array(
            Field::make_complex('crb_certificate')
                ->add_fields('certificate_post', array(
                    Field::make("image", "ico", "Иконка")
                        ->set_value_type('url')
                        ->set_width(25),
                    Field::make('text', 'title_certificate' ,'Название сертификата')
                        ->set_width(25),
                    Field::make('text', 'country' ,'Место и дата')
                        ->set_width(25),
                    Field::make('color', 'icon_color' ,'Цвет иконки')
                        ->set_width(25),
                ))
        ));
    Container::make( 'theme_options', 'Project' )
        ->set_page_parent('themes.php')
        ->add_fields(array(
            Field::make('text', 'head_project' ,'Заголовок блока'),
            Field::make('complex','crb_project', 'Логотипы')
                ->add_fields(array(
                    Field::make('text', 'title_project' ,'Название проекта'),
                    Field::make( 'rich_text', 'project_text', __( 'Текст' ) ),
                    Field::make( 'media_gallery', 'project_logo', __( 'Логотипы' ) )
                ))
        ));
    Container::make('post_meta', __('Обо мне'))
        ->where('post_id', '=', 10)
        ->add_tab(__('Первый блок'), array(
            Field::make('text', 'about_title_top', 'Заголовок'),
            Field::make('rich_text', 'about_text_top', __('Текст'))
        ))
        ->add_tab(__('Образование'), array(
            Field::make('text', 'education_title_top', 'Заголовок'),
            Field::make_complex('education_list_left', 'Список образований')
                ->add_fields(array(
                    Field::make('text', 'about_text_top', 'Текст')
                ))
        ))
        ->add_tab(__('Опыт преподавания'), array(
            Field::make('text', 'exp_title_top', 'Заголовок'),
            Field::make_complex('exp_list_left', 'Список опыта')
                ->add_fields(array(
                    Field::make('text', 'exp_text_top', 'Текст')
                ))
        ));

}