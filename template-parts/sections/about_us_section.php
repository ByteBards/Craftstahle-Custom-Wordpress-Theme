<section class="aboutus-sec">
    <?php
        $featured_image = get_sub_field('about_us_image');
        $h2_text        = get_sub_field('about_us_title');
        $p_text        = get_sub_field('about_us_description');
        $button_text    = get_sub_field('about_us_btn_text');
        $button_url     = get_sub_field('about_us_btn_url');
    ?>
    <div class="aus-img shiny">
        <?php if ($featured_image) : ?>
            <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($h1_text); ?>">
        <?php endif; ?>
        <div class="show-off"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 aus-colmn">
                <div class="aus-content">
                    <?php if ($h2_text) : ?>
                        <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
                    <?php endif; ?>
                    <?php if ($p_text) : ?>
                        <p><?php echo esc_html($p_text); ?></p>
                    <?php endif; ?>
                    <?php if ($button_text && $button_url) : ?>
                        <div class="au-br-btn global-btn">
                            <a href="<?php echo esc_url($button_url); ?>"><?php echo esc_html($button_text); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>