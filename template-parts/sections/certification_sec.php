<section class="certificate-sec">
    <?php
        $h2_text = get_sub_field('certification_title');
        $p_text = get_sub_field('certification_description');
        $certification_gallery = get_sub_field('certification_add');
    ?>
    <div class="container">
        <div class="row cs-top-row">
            <div class="col-md-12">
                <div class="cs-tr-content d-flex flex-column text-center align-items-center justify-content-center">
                    <?php if ($h2_text) : ?>
                        <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
                    <?php endif; ?>
                    <?php if ($p_text) : ?>
                        <p><?php echo esc_html($p_text); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <?php if ($certification_gallery) : ?>
            <div class="row cs-clm-row">
                <?php foreach ($certification_gallery as $image) : ?>
                    <div class="col-md-4">
                        <div class="cs-cr-card">
                            <div class="cs-card-img">
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>