 <section class="technologywork-sec globalpadding">
    <?php
        $h2_text        = get_sub_field('product_l1_title');
        $p_text        = get_sub_field('product_l1_description');
        $button_text    = get_sub_field('product_button_Text');
        $button_url     = get_sub_field('product_button_url');
    ?>
    <div class="container">
        <div class="row tw-top-row">
            <div class="col-md-12">
                <div class="tw-tr-content d-flex flex-column align-items-center justify-content-center">
                    <?php if ($h2_text) : ?>
                        <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
                    <?php endif; ?>
                    <?php if ($p_text) : ?>
                        <p><?php echo esc_html($p_text); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div><div class="row tw-clm-row">
            <?php
            // Query products
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 2, // Show 2 products like in your example
                'post_status'    => 'publish'
            );
            
            $products = new WP_Query($args);
            
            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $permalink = get_permalink();
                    $title = get_the_title();
            ?>
                    <div class="col-md-6">
                        <a href="<?php echo esc_url($permalink); ?>">
                        <div class="tw-cr-card">
                            <div class="tw-card-img shiny">
                                <?php if ($featured_img_url) : ?>
                                    <img src="<?php echo esc_url($featured_img_url); ?>" alt="<?php echo esc_attr($title); ?>">
                                <?php else : ?>
                                    <img src="/wp-content/uploads/2025/05/image-512.png" alt="Placeholder">
                                <?php endif; ?>
                                <div class="show-off"></div>
                            </div>
                            <div class="cr-card-bottom d-flex flex-column align-items-center justify-content-center">
                                <h3 class="h3"><?php echo esc_html($title); ?></h3>
                            </div>
                        </div>
                        </a>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No products found</p>';
            endif;
            ?>
        </div>
        <div class="row tw-bottm-row">
            <div class="col-md-12 d-flex flex-column align-items-center justify-content-center">
                    
                <?php if ($button_text && $button_url) : ?>
                    <div class="tw-br-btn global-btn">
                        <a href="<?php echo esc_url($button_url); ?>"><?php echo esc_html($button_text); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
 </section>