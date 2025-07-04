<section class="news-sec related-news">
    <?php
    $title = get_sub_field('rps_title');
    $description = get_sub_field('rps_description');
    $button_text = get_sub_field('rps_button_text');
    $button_url = get_sub_field('rps_button_url');
    ?>
    <div class="container">
        <div class="row ns-top-row">
            <div class="col-md-6">
                <div class="ns-tr-content">
                    <h2 class="h2"><?php echo $title; ?></h2>
                    <p><?php echo $description; ?></p>
                </div>
            </div>
            <div class="col-md-6 d-flex flex-row align-items-end justify-content-end gap-3">
                <div class="ns-br-btn global-btn">
                    <a href="<?php echo $button_url; ?>">
                        <?php echo $button_text; ?>
                    </a>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                            <path d="M1.66663 5L0.959519 4.29289L0.252412 5L0.959519 5.70711L1.66663 5ZM11.6666 6C12.2189 6 12.6666 5.55228 12.6666 5C12.6666 4.44772 12.2189 4 11.6666 4V6ZM5.66663 1L4.95952 0.292893L0.959519 4.29289L1.66663 5L2.37373 5.70711L6.37373 1.70711L5.66663 1ZM1.66663 5L0.959519 5.70711L4.95952 9.70711L5.66663 9L6.37373 8.29289L2.37373 4.29289L1.66663 5ZM1.66663 5V6H11.6666V5V4H1.66663V5Z" fill="#2E2D2C"/>
                        </svg>
                    </button>
                    <button type="button" role="presentation" class="owl-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                            <path d="M11.3334 5L12.0405 4.29289L12.7476 5L12.0405 5.70711L11.3334 5ZM1.33337 6C0.781089 6 0.333374 5.55228 0.333374 5C0.333374 4.44772 0.781089 4 1.33337 4V6ZM7.33337 1L8.04048 0.292893L12.0405 4.29289L11.3334 5L10.6263 5.70711L6.62627 1.70711L7.33337 1ZM11.3334 5L12.0405 5.70711L8.04048 9.70711L7.33337 9L6.62627 8.29289L10.6263 4.29289L11.3334 5ZM11.3334 5V6H1.33337V5V4H11.3334V5Z" fill="#2E2D2C"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="row ns-carousal-row">
            <div class="col-md-12">
                <div class="news-owl-carousel owl-carousel owl-theme">
                    <?php
                    // Get current post categories
                    $categories = get_the_category(get_the_ID());
                    $category_ids = array();
                    
                    if ($categories) {
                        foreach ($categories as $category) {
                            $category_ids[] = $category->term_id;
                        }
                    }
                    
                    // Query related posts
                    $related_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'post__not_in' => array(get_the_ID()),
                        'category__in' => $category_ids,
                        'orderby' => 'rand'
                    );
                    
                    $related_query = new WP_Query($related_args);
                    
                    if ($related_query->have_posts()) :
                        while ($related_query->have_posts()) : $related_query->the_post();
                            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            ?>
                            <div class="item">
                                <div class="noc-card">
                                    <div class="noc-c-img shiny">
                                        <?php if ($featured_image) : ?>
                                            <img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>">
                                        <?php else : ?>
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/placeholder.jpg'); ?>" alt="<?php the_title_attribute(); ?>">
                                        <?php endif; ?>
                                        <div class="show-off"></div>
                                    </div>
                                    <div class="noc-c-content">
                                        <h4 class="h4"><?php the_title(); ?></h4>
                                        <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="noc-readmore">
                                            <?php echo esc_html__('Read More'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        // Fallback if no related posts found
                        for ($i = 0; $i < 4; $i++) {
                            ?>
                            <div class="item">
                                <div class="noc-card">
                                    <div class="noc-c-img shiny">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/placeholder.jpg'); ?>" alt="Placeholder">
                                        <div class="show-off"></div>
                                    </div>
                                    <div class="noc-c-content">
                                        <h4 class="h4"><?php echo esc_html__('No related posts found'); ?></h4>
                                        <p><?php echo esc_html__('Check back later for updates'); ?></p>
                                        <a href="<?php echo esc_url(home_url('/')); ?>" class="noc-readmore">
                                            <?php echo esc_html__('Read More'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>