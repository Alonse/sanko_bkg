<div class="pattern">
    <div class="container">
        <div class="pattern__inner">
            <div class="breadcrumbs">
                <div class="breadcrumbs__inner">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>
            <?php
            while ( have_posts() ){
                the_post();
                echo '<h1>';
                the_title();
                echo '</h1>';
                the_content();
            }
            ?>
        </div>
    </div>
</div>