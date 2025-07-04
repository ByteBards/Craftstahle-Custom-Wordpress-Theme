<section class="topbanner d-flex align-items-center justify-content-center">
    <?php
    // Get featured image
    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
    
    // Check if it's the home page
    if (is_front_page() || is_home()) {
        // Home page content
        $h1_text = get_field('b_heading'); 
        $h4_text = get_field('b_sub_heading'); 
        $button_text = get_field('b_button_text'); 
        $button_url = get_field('b_button_url'); 
        $show_button = true;
    } else {
        // Other pages content
        $h1_text = get_the_title();
        $h4_text = wp_strip_all_tags(get_the_content(), true);
        $show_button = false;
    }
    ?>
    
    <div class="bannerimg">
        <?php if ($featured_image) : ?>
            <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($h1_text); ?>">
        <?php else : ?>
            <img src="/wp-content/uploads/2025/05/topbaner-scaled.png" alt="<?php echo esc_attr($h1_text); ?>">
        <?php endif; ?>
        <img src="/wp-content/uploads/2025/06/bannershadow-scaled.png" class="bannershadow">
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tb-innercontent d-flex flex-column align-items-center justify-content-center">
                    <?php if ($h1_text) : ?>
                        <h1><?php echo esc_html($h1_text); ?></h1>
                    <?php endif; ?>
                    
                    <?php if ($h4_text) : ?>
                        <h4><?php echo esc_html($h4_text); ?></h4>
                    <?php endif; ?>
                    
                    <?php if ($show_button && $button_text && $button_url) : ?>
                        <div class="tb-btn d-flex flex-column align-items-center justify-content-center">
                            <a href="<?php echo esc_url($button_url); ?>"><?php echo esc_html($button_text); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="socialicon">
        <ul>
            <li><a href="/"><img src="/wp-content/uploads/2025/05/calendar.svg" alt="Calendar"></a></li>
            <li><a href="/"><img src="/wp-content/uploads/2025/05/envelope.svg" alt="Envelope"></a></li>
            <li><a href="/"><img src="/wp-content/uploads/2025/05/phone.svg" alt="Phone"></a></li>
        </ul>
    </div>
</section>