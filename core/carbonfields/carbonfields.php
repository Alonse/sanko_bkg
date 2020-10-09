<?php
use Carbon_Fields\Container;
use Carbon_Fields\Block;
use Carbon_Fields\Field;



add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Настройки темы' ) )
        ->set_page_parent('themes.php')
        ->add_tab( __( 'Логотип' ), array(
            Field::make("image", "logo", "Логотип")
                ->set_value_type('url')
        ) )
        ->add_tab( __( 'Заголовок шапки' ), array(
            Field::make( 'image', 'header_title', 'Заголовок' )
                ->set_width(50)
                ->set_value_type('url'),
            Field::make( 'image', 'header_title_two', 'Заголовок 2' )
                ->set_width(50)
                ->set_value_type('url')
        ) )
        ->add_tab( __( 'Центр знаний' ), array(
            Field::make( 'text', 'title_know', 'Заголовок' ),
            Field::make( 'text', 'text_know_one',  'Текст' ),
            Field::make( 'textarea', 'text_know',  'Текст' ),
        ) )
        ->add_tab( __( 'Контакты' ), array(
            Field::make_complex('lead_contact')
                ->add_fields('phone_block', 'Телефоны', array(
                    Field::make( 'text', 'phone_leader', 'Номер телефона' )
                        ->set_width(50),
                    Field::make( 'select', 'phone_country', 'Страна' )
                        ->add_options( array(
                            'РФ'  => 'РФ',
                            'РБ'  => 'РБ',
                        ) )
                        ->set_width(50),
                ))
                ->add_fields('email_block', 'E-mails', array(
                    Field::make( 'text', 'email_leader', 'E-mail' ),
                )),
            Field::make( 'image', 'contacts-portrait', 'Портрет' )
                ->set_value_type('url')
        ) )
        ->add_tab( __( 'Социальные сети ссылки' ), array(
            Field::make( 'text', 'social_links', 'Соц. сети(facebook)' ),
            Field::make( 'text', 'social_links_two', 'Соц. сети(instagram)' ),
            Field::make( 'text', 'social_links_three', 'Соц. сети(LinkedIn)' ),
            Field::make( 'text', 'youtube', 'Ютуб' ),
        ) )
        ->add_tab( __( 'Основной тайтл для страниц' ), array(
            Field::make("text", "title", "Основной тайтл для страниц")
        ) )
        ->add_tab( __( 'Email для получения писем' ), array(
            Field::make("text", "email", "Email для получения писем")
        ) );
    Container::make( 'theme_options', 'Feedback' )
        ->set_page_parent('themes.php')
        ->add_fields(array(
            Field::make_complex('crb_places')
                ->add_fields('comment_post', array(
                    Field::make('text', 'text_author' ,'ФИО')
                        ->set_width(50),
                    Field::make('text', 'text_prof' ,'Должность')
                        ->set_width(50),
                    Field::make("image", "photo_author", "Фото")
                        ->set_value_type('url')
                        ->set_width(50),
                    Field::make("image", "logo_company", "Логотип компании")
                        ->set_value_type('url')
                        ->set_width(50),
                    Field::make('textarea', 'text_comment' ,'Текст комментария')
                ))
         ));
    Container::make( 'post_meta', __( 'Настройки главной страницы' ) )
        ->where('post_id', '=', get_option( 'page_on_front' ))
        ->add_tab( __( 'Заголовки' ), array(
            Field::make( 'text', 'title_text', 'Заголовок первого блока' ),
            Field::make( 'text', 'programmy_text', 'Программа онлайн формата' ),
            Field::make( 'text', 'comment_text', 'Заголовок отзывов' ),
        ) )
        ->where('post_id', '=', get_option( 'page_on_front' ))
        ->add_tab( __( 'Блок с видео' ), array(
            Field::make( 'text', 'title_video', 'Заголовок видео' ),
            Field::make( 'textarea', 'text_video',  'Текст под заголовком' ),
            Field::make( 'text', 'link_video',  'ссылка на видео' ),
        ) )
        ->where('post_id', '=', get_option( 'page_on_front' ))
        ->add_tab( __( 'Слайдер в шапке' ), array(
            Field::make( 'media_gallery', 'header_slider', __( 'Слайдер' ) )
                ->set_type( array( 'image') ),
        ) );
    Container::make( 'post_meta', __( 'Ключевые методологии' ) )
        ->where('post_id', '=', get_option( 'page_on_front' ))
        ->add_tab( __('PL'), array(
            Field::make( 'text', 'title_pl', 'Заголовок' )
                ->set_width(50),
            Field::make( 'text', 'title_pl_two',  'Подзаголовок' )
                ->set_width(50),
            Field::make( 'textarea', 'text_pl',  'текст' ),
            Field::make( 'color', 'color_pl',  'Цвет заголовка' )
                ->set_width(50),
            Field::make("image", "logo_pl", "Логотип")
                ->set_value_type('url')
                ->set_width(50),
        ))
        ->add_tab( __('WIAL'), array(
            Field::make( 'text', 'title_wial', 'Заголовок' )
                ->set_width(50),
            Field::make( 'text', 'title_wial_two',  'Подзаголовок' )
                ->set_width(50),
            Field::make( 'textarea', 'text_wial',  'текст' ),
            Field::make( 'color', 'color_wial',  'Цвет заголовка' )
                ->set_width(50),
            Field::make("image", "logo_wial", "Логотип")
                ->set_value_type('url')
                ->set_width(50),
        ))
        ->add_tab( __('SIYLI'), array(
            Field::make( 'text', 'title_siyli', 'Заголовок' )
                ->set_width(50),
            Field::make( 'text', 'title_siyli_two',  'Подзаголовок' )
                ->set_width(50),
            Field::make( 'textarea', 'text_siyli',  'текст' ),
            Field::make( 'color', 'color_siyli',  'Цвет заголовка' )
                ->set_width(50),
            Field::make("image", "logo_siyli", "Логотип")
                ->set_value_type('url')
                ->set_width(50),
        ));


    Container::make( 'post_meta', __( 'Видео/Аудио' ) )
        ->where('post_type', '=', 'post')
        ->add_fields(array(
            Field::make( 'text', 'url_media', "Ссылка на видео/аудио" )
        ));
    }

