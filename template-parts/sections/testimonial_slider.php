<section class="testimonials-sec">
    <?php
        $h2_text        = get_sub_field('testimonial_slider_title');
        $p_text        = get_sub_field('testimonial_slider_description');
    ?>
    <div class="container">
        <div class="row ts-top-row">
            <div class="col-md-6">
                <div class="ts-tr-content">
                    <?php if ($h2_text) : ?>
                        <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
                    <?php endif; ?>
                    <?php if ($p_text) : ?>
                        <p><?php echo esc_html($p_text); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column align-items-end justify-content-end">
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
        <div class="row ts-carousal-row">
            <div class="col-md-12">
                <div class="testimonials-owl-carousel owl-carousel owl-theme">
                    <?php
                    $args = array(
                        'post_type' => 'testimonials',
                        'posts_per_page' => -1, // Change this as needed
                        'post_status' => 'publish'
                    );
                    $testimonials = new WP_Query($args);

                    if ($testimonials->have_posts()) :
                        while ($testimonials->have_posts()) : $testimonials->the_post();
                            $designation = get_field('testi_designation');
                    ?>
                            <div class="item">
                                <div class="toc-card">
                                    <div class="toc-c-content">
                                        <p><?php the_content(); ?></p>
                                        <div class="toc-c-info">
                                            <h4 class="h4"><?php the_title(); ?></h4>
                                            <span class="desig"><?php echo esc_html($designation); ?></span>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="52" viewBox="0 0 70 52" fill="none">
                                            <g opacity="0.3" clip-path="url(#clip0)">
                                                <path d="M13.4267 24.2877H4.03974V0.459961H32.8008V16.7778C32.8008 33.3429 21.2429 47.694 5.0403 51.1418C3.58918 51.4507 2.7171 51.5404 2.7171 51.5404L-0.199219 44.4353C12.6849 38.0113 13.4267 24.2877 13.4267 24.2877Z" fill="#CDCDCD"/>
                                                <path d="M50.8216 24.2877H41.4347V0.459961H70.1992V16.7778C70.1992 33.3429 58.6404 47.694 42.4379 51.1418C40.9867 51.4507 40.1155 51.5404 40.1155 51.5404L37.1992 44.4353C50.0789 38.0113 50.8216 24.2877 50.8216 24.2877Z" fill="#CDCDCD"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="70" height="52" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>

            </div>
        </div>
    </div>
</section>