<section class="pro-indus-section globalpadding">
    <div class="container">
        <div class="pis-main">
            <?php
            // Query for products
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 3, // Display 3 products
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $products = new WP_Query($args);
            
            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
                    $product_title = get_the_title();
                    $product_url = get_permalink();
                    $product_excerpt = get_the_excerpt();
                    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <div class="row" style="position:relative;">
                <div class="col-md-10">
                    <div class="pis-main-content">
                        <?php if ($product_title) : ?>
                            <h3><?php echo esc_html($product_title); ?></h3>
                        <?php endif; ?>
                        
                        <?php if ($product_excerpt) : ?>
                            <?php echo wpautop(wp_kses_post($product_excerpt)); ?>
                        <?php endif; ?>
                        
                        <div class="pis-m-btn global-btn">
                            <a href="<?php echo esc_url($product_url); ?>">View details</a>
                        </div>
                    </div>
                    
                    <div class="pis-main-img shiny">
                        <?php if ($featured_image) : ?>
                            <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($product_title); ?>">
                        <?php else : ?>
                            <img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/industryimg.png" alt="Placeholder">
                        <?php endif; ?>
                        <div class="show-off"></div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No products found</p>';
            endif;
            ?>
        </div>
    </div>
</section>