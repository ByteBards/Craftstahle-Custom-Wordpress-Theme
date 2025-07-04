<section class="topbanner d-flex align-items-center justify-content-center">
    <?php
    // Get ACF sub fields for this layout block
    $featured_image = get_sub_field('hero_image');
    $h1_text        = get_sub_field('hero_title');
    $h4_text        = get_sub_field('hero_description');
    $button_text    = get_sub_field('hero_btn_text');
    $button_url     = get_sub_field('hero_btn_url');
    ?>
    
    <div class="bannerimg">
        <?php if ($featured_image) : ?>
            <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($h1_text); ?>">
        <?php else : ?>
            <img src="/wp-content/uploads/2025/05/topbaner-scaled.png" alt="<?php echo esc_attr($h1_text); ?>">
        <?php endif; ?>
        <img src="/wp-content/uploads/2025/06/bannershadow-scaled.png" class="bannershadow" alt="">
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tb-innercontent d-flex text-center flex-column align-items-center justify-content-center">
                    <?php if ($h1_text) : ?>
                        <h1><?php echo esc_html($h1_text); ?></h1>
                    <?php endif; ?>
                    
                    <?php if ($h4_text) : ?>
                        <h4><?php echo esc_html($h4_text); ?></h4>
                    <?php endif; ?>
                    
                    <?php if ($button_text && $button_url) : ?>
                        <div class="tb-btn d-flex flex-column align-items-center justify-content-center">
                            <a href="<?php echo esc_url($button_url); ?>"><?php echo esc_html($button_text); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    
</section>
