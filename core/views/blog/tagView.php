<?php
$terms = get_terms([
    'taxonomy' => ['category'],
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => true,
    'fields' => 'all',
    'hierarchical' => true,
    'pad_counts' => false,
    'cache_domain' => 'core',
]);
$tags = get_tags([
    'orderby' => 'name',
    'order' => 'ASC',
    'fields' => 'all',
]);

$query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => -1,
]);
?>
<div class="center-filter__categories" id="filter">
    <div class='center-filter__categories-item center-filter__item' data-filter="all">Все</div>
    <?php
    if (is_array($terms) && count($terms) > 0):
        foreach ($terms as $term):?>
            <div class='center-filter__categories-item center-filter__item' data-filter="<?= $term->slug ?>" data-id="<?= $term->term_id ?>"><?= $term->name ?></div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<div class="center-filter__sub-inner">

     <div class="center-filter__sub-items-inner">
         <div class="center-filter__sub-title-inner">
             <div class="center-filter__sub-title-name">Все темы</div>
             <svg class="center-filter__sub-title-icon" mlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="none" stroke="#B9B9B9">
                 <path class="center-filter__sub-title-icon-path" d="M1.5 1.5L4.5 4.5L1.5 7.5" stroke-width="1.3" stroke-linecap="round" stroke="#B9B9B9">
                 </path>
             </svg>
         </div>
         <?php
         if (is_array($tags) && count($tags) > 0):
            foreach ($tags as $tag):?>
                    <div class="center-filter__sub-item " data-tag="<?= $tag->slug ?>">
                        <label class="center-filter__container"><?= $tag->name ?>
                            <input type="checkbox" >
                            <span class="center-filter__checkmark"></span>
                        </label>
                    </div>
            <?php endforeach; ?>
         <?php endif; ?>
   </div>
</div>
