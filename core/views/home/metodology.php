
<div class="concept">
    <div class="concept__inner">
        <div class="container">
            <div class="concept__title">Ключевые методологии</div>
            <div class="concept__content">
                <div class="concept__triangle"><img class="concept__triangle-pic concept__triangle-pic concept__triangle-pic_active" src="/wp-content/themes/Sanko/src/icons/concept-triangle.png" alt="" role="presentation"/><span>Непрерывное развитие</span>
                </div>
                <div class="concept__description">
                    <div class="concept__description-item">
                        <?php
                        $plTitle    = carbon_get_post_meta(get_the_ID(), 'title_pl');
                        $plTitleTwo = carbon_get_post_meta(get_the_ID(), 'title_pl_two');
                        $plText     = carbon_get_post_meta(get_the_ID(), 'text_pl');
                        $colorPL    = carbon_get_post_meta(get_the_ID(),'color_pl');
                        ?>
                        <div class="concept__description-pic-inner">
                            <img class="concept__description-pic" src="<?php echo carbon_get_post_meta(get_the_ID(),'logo_pl'); ?>" alt="" role="presentation"/>
                        </div>
                        <div class="concept__description-text">
                            <span style="color: <?php echo $colorPL; ?>"><?php echo $plTitle; ?> – &#160;</span>
                            <span><?php echo $plTitleTwo; ?> &#160;</span>
                            <span><?php echo $plText; ?> &#160;</span>
                        </div>
                    </div>
                    <div class="concept__description-item">
                        <?php
                        $wialTitle = carbon_get_post_meta(get_the_ID(), 'title_wial');
                        $wialTitleTwo = carbon_get_post_meta(get_the_ID(), 'title_wial_two');
                        $wialText = carbon_get_post_meta(get_the_ID(), 'text_wial');
                        $colorWIAL  = carbon_get_post_meta(get_the_ID(),'color_wial');
                        ?>
                        <div class="concept__description-pic-inner">
                            <img class="concept__description-pic" src="<?php echo carbon_get_post_meta(get_the_ID(),'logo_wial'); ?>" alt="" role="presentation"/>
                        </div>
                        <div class="concept__description-text">
                            <span style="color: <?php echo $colorWIAL; ?>"><?php echo $wialTitle; ?> – &#160;</span>
                            <span><?php echo $wialTitleTwo; ?> &#160;</span>
                            <span><?php echo $wialText; ?></span>
                        </div>
                    </div>
                    <div class="concept__description-item">
                        <?php
                        $siyliTitle = carbon_get_post_meta(get_the_ID(), 'title_siyli');
                        $siyliTitleTwo = carbon_get_post_meta(get_the_ID(), 'title_siyli_two');
                        $siyliText = carbon_get_post_meta(get_the_ID(), 'text_siyli');
                        $colorSIYLI      = carbon_get_post_meta(get_the_ID(),'color_siyli');
                        ?>
                        <div class="concept__description-pic-inner">
                            <img class="concept__description-pic" src="<?php echo carbon_get_post_meta(get_the_ID(),'logo_siyli'); ?>" alt="" role="presentation"/>
                        </div>
                        <div class="concept__description-text">
                            <span style="color: <?php echo $colorSIYLI; ?>"><?php echo $siyliTitle; ?> – &#160;</span>
                            <span><?php echo $siyliTitleTwo; ?> &#160;</span>
                            <span><?php echo $siyliText; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>