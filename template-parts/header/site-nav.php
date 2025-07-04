<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

    $contact_url = get_field('contact_url', 'options');

    $phone_number = get_field('phone_number', 'options');
    $email_address = get_field('email_address', 'options');

?>


<?php if ( has_nav_menu( 'primary' ) ) : ?>
	

            <nav class="navbar navbar-expand-lg">
                <div class="navbar-brand d-block d-lg-none" href="#">
                <a href="/" class="navbar-brand mx-auto site-logo"><?php the_custom_logo(); ?></a>
                </div>
                <button class="navbar-toggler navbar_toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- <ul class="navbar-nav navbar-left">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pages</a>
                        </li>
                    </ul> -->
                    <?php
                    if (has_nav_menu('primary')) :
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container_class' => 'primary-menu-class',
                            'menu_class'     => 'navbar-nav navbar-left', // For the <ul> element
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'walker'         => new Primary_Menu_Walker() // Custom walker for adding classes
                        ));
                    endif;
                    ?>
                                        <div class="navbar-brand d-none d-lg-block" href="#">
						<?php get_template_part( 'template-parts/header/site-branding' ); ?>
                    </div>
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="tel:<?php echo esc_html($phone_number); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
								<path d="M10.7682 14C10.4387 14 10.1071 13.9555 9.77974 13.8657C5.35409 12.6509 1.85017 9.14869 0.634818 4.72529C0.358439 3.71942 0.509871 2.67118 1.06263 1.77516C1.61754 0.874826 2.52999 0.239423 3.56588 0.0326487C4.25503 -0.105201 4.93628 0.202094 5.28588 0.791546L6.4079 2.68697C6.95276 3.6074 6.68203 4.79277 5.79116 5.38581L4.97935 5.92573C5.73814 7.48372 7.0144 8.76386 8.56571 9.52204L9.11288 8.70569C9.70942 7.81613 10.8946 7.54977 11.8142 8.09758L13.7115 9.22909C14.2988 9.57946 14.6024 10.2651 14.4688 10.9343C14.2621 11.9703 13.6268 12.8828 12.7273 13.4378C12.1228 13.8097 11.4502 14 10.7682 14ZM3.89537 1.07513C3.86019 1.07513 3.82432 1.07874 3.78986 1.08591C3.03323 1.23741 2.37782 1.6933 1.98012 2.34019C1.58601 2.97918 1.47759 3.72516 1.67429 4.43954C2.78914 8.49821 6.00446 11.7126 10.0647 12.8268C10.7797 13.0228 11.5233 12.9137 12.1615 12.5203C12.8076 12.1218 13.2643 11.4656 13.4129 10.7218C13.4574 10.4985 13.3562 10.2694 13.1595 10.1524L11.2628 9.02087C10.8357 8.76671 10.2843 8.89093 10.0072 9.30376L9.20682 10.4992C9.06324 10.7131 8.78624 10.795 8.55222 10.6959C6.42518 9.80634 4.69439 8.07173 3.80423 5.93649C3.70517 5.69813 3.78833 5.42387 4.00298 5.28099L5.19545 4.48763C5.60894 4.21265 5.73453 3.66197 5.48113 3.23478L4.35911 1.34006C4.26076 1.17349 4.08273 1.07513 3.89537 1.07513Z" fill="#2E2D2C"/>
								</svg><?php echo esc_html($phone_number); ?>
							</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:<?php echo esc_html($email_address); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
									<path d="M12.6154 13.5H3.38462C1.52462 13.5 0.5 12.4505 0.5 10.5455V3.45455C0.5 1.54945 1.52462 0.5 3.38462 0.5H12.6154C14.4754 0.5 15.5 1.54945 15.5 3.45455V10.5455C15.5 12.4505 14.4754 13.5 12.6154 13.5ZM3.38462 1.68182C2.17154 1.68182 1.65385 2.21206 1.65385 3.45455V10.5455C1.65385 11.7879 2.17154 12.3182 3.38462 12.3182H12.6154C13.8285 12.3182 14.3462 11.7879 14.3462 10.5455V3.45455C14.3462 2.21206 13.8285 1.68182 12.6154 1.68182H3.38462ZM8.79158 7.53497L12.5699 4.72066C12.8276 4.52921 12.8846 4.15891 12.6969 3.89497C12.51 3.63182 12.1501 3.57194 11.8909 3.76497L8.1123 6.57928C8.04461 6.6297 7.95464 6.6297 7.88694 6.57928L4.1084 3.76497C3.8484 3.57194 3.48928 3.63261 3.30236 3.89497C3.11467 4.15891 3.17162 4.52842 3.42931 4.72066L7.20767 7.53575C7.44459 7.71224 7.72233 7.7997 7.99925 7.7997C8.27617 7.7997 8.55543 7.71146 8.79158 7.53497Z" fill="#2E2D2C"/>
								</svg><?php echo esc_html($email_address); ?>
							</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_html($contact_url); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
									<path d="M12.6154 13.5H3.38462C1.52462 13.5 0.5 12.4505 0.5 10.5455V3.45455C0.5 1.54945 1.52462 0.5 3.38462 0.5H12.6154C14.4754 0.5 15.5 1.54945 15.5 3.45455V10.5455C15.5 12.4505 14.4754 13.5 12.6154 13.5ZM3.38462 1.68182C2.17154 1.68182 1.65385 2.21206 1.65385 3.45455V10.5455C1.65385 11.7879 2.17154 12.3182 3.38462 12.3182H12.6154C13.8285 12.3182 14.3462 11.7879 14.3462 10.5455V3.45455C14.3462 2.21206 13.8285 1.68182 12.6154 1.68182H3.38462ZM8.79158 7.53497L12.5699 4.72066C12.8276 4.52921 12.8846 4.15891 12.6969 3.89497C12.51 3.63182 12.1501 3.57194 11.8909 3.76497L8.1123 6.57928C8.04461 6.6297 7.95464 6.6297 7.88694 6.57928L4.1084 3.76497C3.8484 3.57194 3.48928 3.63261 3.30236 3.89497C3.11467 4.15891 3.17162 4.52842 3.42931 4.72066L7.20767 7.53575C7.44459 7.71224 7.72233 7.7997 7.99925 7.7997C8.27617 7.7997 8.55543 7.71146 8.79158 7.53497Z" fill="#2E2D2C"/>
								</svg>Contact Us
							</a>
                        </li>
                    </ul>
                </div>
            </nav>
<?php endif;
