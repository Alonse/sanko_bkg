<?php

require $_SERVER['DOCUMENT_ROOT'].'/wp-load.php';

$id = stripslashes($_POST['id']);

$args = [
    'numberposts'	=> 7,
    'category'    => $id,
];

$posts_array = get_posts($args);

$html = '';
foreach( $posts_array as $post ){
    setup_postdata($post);
    
    // $query->the_post();
    $categories = wp_get_post_terms(get_the_ID(), 'category', ['fields' => 'all']);
    $tags = wp_get_post_tags(get_the_ID(), 'taxonomy',['fields' => 'all']);
    $categoriesSlug = [];
    $tagsSlug = [];
    foreach ($categories as $category) {
        $categoriesSlug[] = $category->slug;
    }
    foreach ($tags as $tag) {
        $tagsSlug[] = $tag->slug;
    }

    $html .= '
    <a class="center-filter__result-item" href="';
    $html .= get_permalink();
    $html .= '" data-tags="';
    $html .= implode(' ',$tagsSlug);
    $html .= '" data-cat="';
    $html .= implode(' ', $categoriesSlug);
    $html .= '" style="background-image: url(';
    $html .= wp_get_attachment_image_url( get_post_thumbnail_id(), 'full');
    $html .= '); border-radius: 5px">
        <img class="center-filter__result-item-shadow" src="/wp-content/themes/Sanko/src/icons/blog-item-shadow.png" alt="" role="presentation"/>
        <div class="center-filter__name-inner">';
            if(in_category(13)){ 
            $html .= '<img class="center-filter__name-icon" src="/wp-content/themes/Sanko/src/icons/audio-icon.svg" alt="" role="presentation"/>';
            } if(in_category(12)) {
            $html .= '<img class="center-filter__name-icon" src="/wp-content/themes/Sanko/src/icons/Vector1.svg" alt="" role="presentation"/>';
            } if(in_category(1)) {
            $html .= '<img class="center-filter__name-icon" src="/wp-content/themes/Sanko/src/icons/Vector.svg" alt="" role="presentation"/>';
            }
    $html .= '<div class="center-filter__name">';
    $html .= $category->name;
    $html .= '</div>
        </div>
        <div class="center-filter__description">';
    $html .= get_the_title();
    $html .= '</div>
    </a>
    ';
}

echo $html;

?>
