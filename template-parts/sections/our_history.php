<section class="our-history-section globalpadding">
    <?php
    $h2_text = get_sub_field('our_history_title');
    $p_text = get_sub_field('our_history_description');
    $history_slides = get_sub_field('history_slider'); // Get the repeater field
    ?>
    
    <div class="container">
        <div class="row ohs-toprow">
            <div class="col-md-6">
                <?php if ($h2_text) : ?>
                    <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
                <?php endif; ?>
                <?php if ($p_text) : ?>
                    <p><?php echo esc_html($p_text); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-6 d-flex flex-row align-items-end justify-content-end gap-3">
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
    </div>
    
    <?php if ($history_slides) : ?>
    <div class="ohs-main">
        <div class="container">
            <div class="row ohs-midrow">
                <div class="col-md-12">
                    <!-- Year Navigation -->
                    <div class="year-navigation owl-carousel" id="year-nav">
                        <?php foreach ($history_slides as $index => $slide) : 
                            $year = $slide['hs_year'];
                        ?>
                            <div class="year-item <?php echo $index === 0 ? 'active' : ''; ?>" data-slide="<?php echo $index; ?>">
                                <div class="yn-yitem">
                                    <?php if ($year) : ?>
                                        <div class="yn-year"><?php echo esc_html($year); ?></div>
                                    <?php endif; ?>
                                    <div class="yn-dot"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="row ohs-bottomrow">
                <div class="col-md-12">
                    <!-- Content Slider -->
                    <div class="owl-carousel" id="history-slider">
                        <?php foreach ($history_slides as $slide) : 
                            $image = $slide['hs_image'];
                            $year = $slide['hs_year'];
                            $heading = $slide['hs_heading'];
                            $description = $slide['hs_description'];
                        ?>
                            <div class="history-slide">
                                <div class="row sh-row">
                                    <div class="col-md-5">
                                        <div class="sh-r-img">
                                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($year ? $year . ' Image' : 'History Image'); ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="sh-r-contnt">
                                            <div class="sh-r-c-top">
                                                <?php if ($year) : ?>
                                                    <div><?php echo esc_html($year); ?></div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="sh-r-c-bottom">
                                                <?php if ($heading) : ?>
                                                    <h3><?php echo esc_html($heading); ?></h3>
                                                <?php endif; ?>
                                                <?php if ($description) : ?>
                                                    <p><?php echo wp_kses_post($description); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>