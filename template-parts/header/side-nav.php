
<div class="side_nav">
    <!-- <div class="side_nav__wave_svg">
        <object class="svg-object" data-direction="left" type="image/svg+xml" data="<?php //echo get_stylesheet_directory_uri(); ?>/assets/images/side-nav-lines.svg"></object>
    </div> -->
    <div class="sidenav__header">
        <div class="sidenav__header_line"></div>
        <button class="btn__close st-pusher">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.6328 1.25293L1.13281 23.7529M1.13281 1.25293L23.6328 23.7529" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>

    <div class="sidenav__body">
        <div class="side_nav__top">
            <div class="side_nav__top_main_nav">
            <?php
            $side_navbar_name = wp_get_nav_menu_name('side-navbar');
            echo '<h3 class="footer_menu_heading">' . esc_html($side_navbar_name) . '</h3>';
                wp_nav_menu(array(
                    'theme_location' => 'side-navbar',
                    'container'      => false,
                    'menu_class'     => 'side-navbar',
                ));
            ?>
            
            </div>
           
        </div>
        <?php
            $s_sidenav_heading = get_field('s_sidenav_heading', 'options');
            $s_cdetail_ph_no_1 = get_field('s_sidenav_ph_number', 'options');
            $s_cdetail_ph_no_2 = get_field('s_cdetail_ph_no_2', 'options');
            $s_sidenav_email = get_field('s_sidenav_email', 'options');
            $s_cdetail_email_2 = get_field('s_cdetail_email_2', 'options');
            $s_sidenav_location = get_field('s_sidenav_location', 'options');
            $s_sidenav_location_link = get_field('s_sidenav_location_link', 'options');
        ?>
        <div class="side_nav__bottom">
            <div class="sidenav_contact">
            <?php
                $cta_button_text = get_field('cta_button_text', 'options');
                $cta_button_url = get_field('cta_button_url', 'options');
            ?>
                <div class="sidenav_contact__box">
                    <div class="hb-btn">
                        <a href="<?php echo $cta_button_url; ?>" class="btn-lights btn-lights_green btn_side_nav">
                        <?php echo $cta_button_text; ?>                      </a>
                     </div>
                </div>
                <div class="sidenav_contact__box">
                    <div class="sidenav_contact__box__social_list">
                        <?php get_template_part('template-parts/common/follow-us-links'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>