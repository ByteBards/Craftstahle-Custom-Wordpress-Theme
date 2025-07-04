<section class="services-sec">
    <?php
        $h2_text        = get_sub_field('service_l1_title');
        $p_text        = get_sub_field('service_l1_description');
    ?>
    <div class="container">
        <div class="row ss-top-row">
            <div class="col-md-12">
                <div class="ss-tr-content d-flex flex-column align-items-center justify-content-center">
                    <?php if ($h2_text) : ?>
                        <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
                    <?php endif; ?>
                    <?php if ($p_text) : ?>
                        <p><?php echo esc_html($p_text); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row ss-clm-row">
            <?php
            // Query services
            $args = array(
                'post_type'      => 'service', // Changed to 'service' post type
                'posts_per_page' => 4, // Show 4 services (matching your column count)
                'post_status'    => 'publish'
            );
            
            $services = new WP_Query($args);
            
            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post();
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $permalink = get_permalink();
                    $title = get_the_title();
            ?>
                    <div class="col-md-3">
                        <div class="ss-cr-card">
                            <a href="<?php echo esc_url($permalink); ?>"> <!-- Added link wrapper -->
                                <div class="ss-card-img shiny">
                                    <?php if ($featured_img_url) : ?>
                                        <img src="<?php echo esc_url($featured_img_url); ?>" alt="<?php echo esc_attr($title); ?>">
                                    <?php else : ?>
                                        <img src="/wp-content/uploads/2025/05/image-512.png" alt="Placeholder">
                                    <?php endif; ?>
                                    <div class="show-off"></div>
                                </div>
                                <div class="cr-card-bottom">
                                    <h3 class="h3"><?php echo esc_html($title); ?></h3>
                                </div>
                            </a>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<div class="col-12"><p>No services found</p></div>';
            endif;
            ?>
        </div>
    </div>
</section>