 <section class="getintouch-section homegin-ces">
    <?php
        $h2_text        = get_sub_field('contact_us_title');
        $p_text        = get_sub_field('contact_us_description');
        $po_text        = get_sub_field('contact_us_o_description');
        $button_text    = get_sub_field('contact_us_button_text');
        $button_url     = get_sub_field('contact_us_button_url');
        $bg_image       = get_sub_field('contact_us_background_image');
        $phone_number = get_field('phone_number', 'options');
        $email_address = get_field('email_address', 'options');
        $location = get_field('location', 'options');
        $location_url = get_field('location_url', 'options');
    ?>
    <style>
        .col-md-4.gitbg-img::before {
            <?php if ($bg_image) : ?>
            background-image: url(<?php echo esc_url($bg_image); ?>);
        <?php else : ?>
            background-image: url(https://craftstahle.scdwsites.com/wp-content/uploads/2025/05/Screenshot-2025-05-12-at-12.44.56 PM-1.png);
        <?php endif; ?>
    
}
    </style>
    <div class="container">
        <div class="row gintsec-row">
            <div class="col-md-8">
                <div class="gitsec-form">
                    <div class="gitr-content">
                        <?php if ($h2_text) : ?>
                            <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
                        <?php endif; ?>
                        <?php if ($p_text) : ?>
                            <p><?php echo esc_html($p_text); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="gitr-from">
                        
                        <?php
                        echo do_shortcode('[contact-form-7 id="0925cc0" title="Form"]');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gitbg-img">
                <div class="gitbg-inner">
                    <div class="gitr-content">
                        <h2 class="h2" style="color:transparent;">Get In Touch</h2>
                        <?php if ($po_text) : ?>
                            <p><?php echo esc_html($po_text); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="gitr-contact-info">
                        <?php
                        if( get_sub_field('contact_us_display_condition') == 'show' ) { 
                            ?>
                        <ul>
                            <li><a href="tel:<?php echo esc_html($phone_number); ?>"><span class="ci-icon"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/x32_7-Phone.svg" alt=""></span><?php echo esc_html($phone_number); ?></a></li>
                            <li><a href="mailto:<?php echo esc_html($email_address); ?>"><span class="ci-icon"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/email-1-1.svg" alt=""></span><?php echo esc_html($email_address); ?></a></li>
                            <li><a href="<?php echo esc_html($location_url); ?>"><span class="ci-icon"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/Group.svg" alt=""></span><?php echo esc_html($location); ?></a></li>
                        </ul>
                        <?php
                        }
                            ?>
                    </div>
                    <?php if ($button_text && $button_url) : ?>
                        <div class="gitr-btn global-btn">
                            <a href="<?php echo esc_url($button_url); ?>"><?php echo esc_html($button_text); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
 </section>