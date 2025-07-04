<?php
    $footer_logo = get_field('footerlogo_logo', 'options');
    $contact_heading = get_field('contact_heading', 'options');
    $contact_sub_heading = get_field('contact_sub_heading', 'options');
    $contact_url = get_field('contact_url', 'options');
    $copyright_text = get_field('copyright_text', 'options');

    $phone_number = get_field('phone_number', 'options');
    $whatsapp_number = get_field('whatsapp_number', 'options');
    $email_address = get_field('email_address', 'options');
    $location = get_field('location', 'options');
    $location_url = get_field('location_url', 'options');
    $calender_url = get_field('calender_url', 'options');

?>
<div class="footersec-top">
    <div class="container">
        <div class="row fs-row-top">
            <div class="col-md-3 fs-r-col1">
                <div class="fs-r-c-right">
                    <div class="fsrcr-logo">
                        <a href="/"><img src="<?php echo esc_url($footer_logo); ?>" alt="Brokerin Logo"></a>
                    </div>

                    <div class="fsrcr-quick_links">
                        <?php
                        if (has_nav_menu('quick_links')) :
                            $locations = get_nav_menu_locations();
                            $menu_id = $locations['quick_links'];
                            $menu = wp_get_nav_menu_object($menu_id);
                            if ($menu) {
                                echo '<h2>' . esc_html($menu->name) . ':</h2>';
                            }

                            wp_nav_menu(array(
                                'theme_location' => 'quick_links',
                                'container_class' => 'custom-menu-class'
                            ));
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-9 fs-r-col2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="fsr-inner-news">
                            <h2>News:</h2>
                            <div class="fsrin-posts">
                                <?php
                                    // Query posts
                                    $args = array(
                                        'post_type'      => 'post',
                                        'posts_per_page' => 2, // Show 4 posts (matching your example)
                                        'post_status'    => 'publish'
                                    );
                                    
                                    $posts = new WP_Query($args);
                                    
                                    if ($posts->have_posts()) :
                                        while ($posts->have_posts()) : $posts->the_post();
                                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                            $permalink = get_permalink();
                                            $title = get_the_title();
                                            $excerpt = get_the_excerpt();
                                    ?>
                                <div class="fsrinpost">
                                    <a href="<?php echo esc_url($permalink); ?>">
                                        <div class="fsinp-title"><?php echo esc_html($title); ?></div>
                                        <div class="fsinp-content"><?php echo esc_html(wp_trim_words($excerpt, 10)); ?></div>
                                    </a>
                                </div>
                                
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo '<div class="item"><p>No posts found</p></div>';
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fsr-inner-info">
                            <h2><?php echo esc_html($contact_heading); ?></h2>
                            <h2><a href="<?php echo esc_html($contact_url); ?>" style="color:#F59C00;"><?php echo esc_html($contact_sub_heading); ?></a></h2>
                            
                            <div class="gitr-contact-info">
                                <ul>
                                    <li><a href="tel:<?php echo esc_html($phone_number); ?>"><span class="ci-icon"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/x32_7-Phone.svg" alt=""></span><?php echo esc_html($phone_number); ?></a></li>
                                    <li><a href="mailto:<?php echo esc_html($email_address); ?>"><span class="ci-icon"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/email-1-1.svg" alt=""></span><?php echo esc_html($email_address); ?></a></li>
                                    <li><a href="<?php echo esc_html($location_url); ?>"><span class="ci-icon"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/Group.svg" alt=""></span><?php echo esc_html($location); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row fs-row-bottom">
            <div class="col-md-6">
                <div class="copyrighttext">
                    <p><?php echo esc_html($copyright_text); ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="privacypolicymenu">
                    <?php if (has_nav_menu('privacypolicy')) : ?>
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'privacypolicy',
                                'container_class' => 'custom-menu-class'
                            ));
                            ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footerextra">
        <div class="socialicon">
            <ul>
                <li><a href="<?php echo esc_html($calender_url); ?>"><img src="/wp-content/uploads/2025/05/calendar.svg" alt="Calendar"></a></li>
                <li><a href="mailto:<?php echo esc_html($email_address); ?>"><img src="/wp-content/uploads/2025/05/envelope.svg" alt="Envelope"></a></li>
                <li><a href="tel:<?php echo esc_html($phone_number); ?>"><img src="/wp-content/uploads/2025/05/phone.svg" alt="Phone"></a></li>
            </ul>
        </div>
        <div class="wtsappicon">
            <a href="https://wa.me/<?php echo esc_html($whatsapp_number); ?>"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/whatsapp.svg" alt=""></a>
        </div>
        <div class="backtoTop">
            <a class="back-to-top"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/arrow-top-small.svg" alt=""></a>
        </div>
    </div>
</div>

