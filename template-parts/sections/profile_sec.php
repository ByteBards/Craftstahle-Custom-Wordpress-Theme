 <section class="technologywork-sec globalpadding">
    <?php
    $profile_image = get_sub_field('profile_image');
    $h2_text        = get_sub_field('profile_title');
    $p_text        = get_sub_field('profile_description');
    $img_text        = get_sub_field('profile_img_Text');
    ?>
    <div class="container">
        <div class="row tw-top-row">
            <div class="col-md-12">
                <div class="tw-tr-content d-flex flex-column align-items-center justify-content-center">
                    <?php if ($h2_text) : ?>
                        <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
                    <?php endif; ?>
                    <?php if ($p_text) : ?>
                        <p class="text-center"><?php echo esc_html($p_text); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row tw-clm-row">
            <div class="col-md-12">
                <div class="tw-cr-card">
                    <div class="tw-card-img shiny">
                        <?php if ($profile_image) : ?>
                            <img src="<?php echo esc_url($profile_image); ?>" alt="<?php echo esc_attr($img_text); ?>">
                        <?php endif; ?>
                        <!-- <div class="show-off"></div> -->
                    </div>
                    <div class="cr-card-bottom d-flex flex-column align-items-center justify-content-center">
                    <?php if ($img_text) : ?>
                        <h3 class="h3"><?php echo esc_html($img_text); ?></h3>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>