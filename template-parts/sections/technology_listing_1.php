<section class="technology-sec globalpadding">
    <?php
        $h2_text        = get_sub_field('technology_l1_title');
        $p_text        = get_sub_field('technology_l1_description');
        $button_text    = get_sub_field('technology_btn_text');
        $button_url     = get_sub_field('technology_btn_url');
    ?>
    <div class="container">
        <div class="row tc-top-row">
            <div class="col-md-6">
                <div class="tc-tr-content">
                    <?php if ($h2_text) : ?>
                        <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
                    <?php endif; ?>
                    <?php if ($p_text) : ?>
                        <p><?php echo esc_html($p_text); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column align-items-end justify-content-end">
                <?php if ($button_text && $button_url) : ?>
                    <div class="ts-br-btn global-btn">
                        <a href="<?php echo esc_url($button_url); ?>"><?php echo esc_html($button_text); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row ts-colm-row">
            <div class="col-md-6 ts-c-topclm">
                <div class="row ts-cr-inner-row">
                    <div class="col-md-6 pr-0">
                        <div class="ts-ir-img shiny">
                            <img src="/wp-content/uploads/2025/05/industrial-cnc-machine-sparks-precision-metal-cutti.png" alt="">
                            <div class="show-off"></div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="tr-ir-content">
                            <h3 class="h3">Laser Cutting</h3>
                            <p>Laser cutting is a precise, high-energy manufacturing process that uses a focused laser beam to cut, engrave, or etch materials.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ts-c-topclm">
                <div class="row ts-cr-inner-row">
                    <div class="col-md-6 pr-0">
                        <div class="ts-ir-img shiny">
                            <img src="/wp-content/uploads/2025/05/industrial-cnc-machine-sparks-precision-metal-cutti.png" alt="">
                            <div class="show-off"></div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="tr-ir-content">
                            <h3 class="h3">Laser Cutting</h3>
                            <p>Laser cutting is a precise, high-energy manufacturing process that uses a focused laser beam to cut, engrave, or etch materials.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ts-c-topclm">
                <div class="row ts-cr-inner-row">
                    <div class="col-md-6 pr-0">
                        <div class="ts-ir-img shiny">
                            <img src="/wp-content/uploads/2025/05/industrial-cnc-machine-sparks-precision-metal-cutti.png" alt="">
                            <div class="show-off"></div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="tr-ir-content">
                            <h3 class="h3">Laser Cutting</h3>
                            <p>Laser cutting is a precise, high-energy manufacturing process that uses a focused laser beam to cut, engrave, or etch materials.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ts-c-topclm">
                <div class="row ts-cr-inner-row">
                    <div class="col-md-6 pr-0">
                        <div class="ts-ir-img shiny">
                            <img src="/wp-content/uploads/2025/05/industrial-cnc-machine-sparks-precision-metal-cutti.png" alt="">
                            <div class="show-off"></div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="tr-ir-content">
                            <h3 class="h3">Laser Cutting</h3>
                            <p>Laser cutting is a precise, high-energy manufacturing process that uses a focused laser beam to cut, engrave, or etch materials.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>