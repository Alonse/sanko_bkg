<?php
require __DIR__ . '/wp-load.php';

$args = [
    'numberposts'	=> 9999
];

$posts_array = get_posts($args);


foreach( $posts_array as $post ){
    setup_postdata($post);
    
    $query->the_post();
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

    $html = '
    <a class="center-filter__result-item" href="<?php the_permalink() ?>" data-tags="'.implode(' ',$tagsSlug).'" data-cat="'.implode(' ', $categoriesSlug).'" style="background-image: url('. wp_get_attachment_image_url( get_post_thumbnail_id(), 'full').'); border-radius: 5px">
        <img class="center-filter__result-item-shadow" src="/wp-content/themes/Sanko/src/icons/blog-item-shadow.png" alt="" role="presentation"/>
        <div class="center-filter__name-inner">
            <?php   if(in_category(13)){ ?>
            <img class="center-filter__name-icon" src="/wp-content/themes/Sanko/src/icons/audio-icon.svg" alt="" role="presentation"/>
            <?php } if(in_category(12)) { ?>
            <img class="center-filter__name-icon" src="/wp-content/themes/Sanko/src/icons/Vector1.svg" alt="" role="presentation"/>
            <?php } if(in_category(1)) { ?>
            <img class="center-filter__name-icon" src="/wp-content/themes/Sanko/src/icons/Vector.svg" alt="" role="presentation"/>
            <?php } ?>
            <div class="center-filter__name">'.$category->name.'</div>
        </div>
        <div class="center-filter__description">'.the_title().'</div>
    </a>
    ';
}

?>