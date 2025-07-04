<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'twenty-twenty-one-custom-color-overrides','twenty-twenty-one-style','twenty-twenty-one-style','twenty-twenty-one-print-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION


function amaricanafood_scripts_styles1() {
	wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/style/main.css');
	wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/bootstrap/bootstrap.min.css');
	wp_enqueue_style('carousel-css', get_stylesheet_directory_uri() . '/assets/owl.carousel/assets/owl.carousel.min.css');
	wp_enqueue_style('aos-css', get_stylesheet_directory_uri() . '/assets/aos/aos.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
	wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/assets/slick/slick.css');
	wp_enqueue_style('slick-min-css', get_stylesheet_directory_uri() . '/assets/slick/slick.min.css');
	wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/slick/slick-theme.css');
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap/bootstrap.bundle.min.js', array(),  true );
	wp_enqueue_script( 'jquery-easing', get_stylesheet_directory_uri() . '/assets/jquery.easing/jquery.easing.min.js', array(),  true );
	wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/owl.carousel/owl.carousel.min.js', array(),  false );
	wp_enqueue_script( 'aos', get_stylesheet_directory_uri() . '/assets/aos/aos.js', array(), '1.0', true  );
	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js', array(), true );
	 wp_enqueue_script( 'animate-lib', get_stylesheet_directory_uri() . '/assets/jquery/anime.min.js', array(), true );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/script/custom.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'amaricanafood_scripts_styles1' );



add_action('acf/input/admin_enqueue_scripts', function () {
    wp_enqueue_style('acf-flexible-preview-style', get_stylesheet_directory_uri() . '/assets/style/admin.css');
    wp_enqueue_script('acf-flexible-preview-script', get_stylesheet_directory_uri() . '/assets/script/admin.js', ['jquery'], null, true);

    // Pass layout => image mapping to JS
    wp_localize_script('acf-flexible-preview-script', 'acfLayoutPreviews', [
        'layouts' => [
            'hero_section'        => get_stylesheet_directory_uri() . '/assets/admin/hero.png',
            'product_listing_1' => get_stylesheet_directory_uri() . '/assets/admin/product listing.png',
            'service_listing_01'         => get_stylesheet_directory_uri() . '/assets/admin/service-list.png',
            'about_us_section'        => get_stylesheet_directory_uri() . '/assets/admin/aboutus.png',
            'technology_listing_1' => get_stylesheet_directory_uri() . '/assets/admin/technoloy listing.jpg',
            'certification_sec'         => get_stylesheet_directory_uri() . '/assets/admin/certification.png',
            'news_listing_1'        => get_stylesheet_directory_uri() . '/assets/admin/news.png',
            'testimonial_slider' => get_stylesheet_directory_uri() . '/assets/admin/testimonial.png',
            'teams_sec'         => get_stylesheet_directory_uri() . '/assets/admin/team Info.jpg',
            'contact_us_sec'         => get_stylesheet_directory_uri() . '/assets/admin/contactus1.png',
            'profile_sec'         => get_stylesheet_directory_uri() . '/assets/admin/profile.jpg',
            'three_cards_1'         => get_stylesheet_directory_uri() . '/assets/admin/threecards.png',
            'our_vision'         => get_stylesheet_directory_uri() . '/assets/admin/ourvission.png',
            'our_clients'         => get_stylesheet_directory_uri() . '/assets/admin/ourclients.png',
            'our_history'         => get_stylesheet_directory_uri() . '/assets/admin/ourhistry.png',
            'product_listing_2'         => get_stylesheet_directory_uri() . '/assets/admin/product listing 2.jpg',
            'industry_list'         => get_stylesheet_directory_uri() . '/assets/admin/industrieslist.png',
            'post_cards'         => get_stylesheet_directory_uri() . '/assets/admin/postcards.png',
            'contact_form'         => get_stylesheet_directory_uri() . '/assets/admin/contactfrom.png',
            'four_card_section'         => get_stylesheet_directory_uri() . '/assets/admin/4cards.png',
            'map'         => get_stylesheet_directory_uri() . '/assets/admin/map.png',
            'content_editor'        => get_stylesheet_directory_uri() . '/assets/admin/contentsec.png',
            'content_editor_in'        => get_stylesheet_directory_uri() . '/assets/admin/contentsec.png',
            'two_column_image'      => get_stylesheet_directory_uri() . '/assets/admin/twocoulumnimg.png',
            'post_content_area'     => get_stylesheet_directory_uri() . '/assets/admin/post.png',
            'related_post_section'  => get_stylesheet_directory_uri() . '/assets/admin/news.png',
            'banner_content'  => get_stylesheet_directory_uri() . '/assets/admin/servicebanner.png',
            'three_cards'  => get_stylesheet_directory_uri() . '/assets/admin/threecardsser.png',
            'image_section'  => get_stylesheet_directory_uri() . '/assets/admin/imgcontentsec.png',
            'quick_enquiry'  => get_stylesheet_directory_uri() . '/assets/admin/serviceform.png',
        ]
    ]);
});


// Option page added code
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
// Menus
function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'quick_links' => __( 'Quick Links' ),
		'privacypolicy' => __( 'Privacy Policy' )
	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );


// Load More Posts AJAX Handler
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

function load_more_posts() {
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $post_type = isset($_POST['post_type']) ? sanitize_text_field($_POST['post_type']) : 'post';
    $posts_per_page = isset($_POST['posts_per_page']) ? intval($_POST['posts_per_page']) : 3;
    $text_align = isset($_POST['text_align']) ? sanitize_text_field($_POST['text_align']) : 'left';
    $show_button = isset($_POST['show_button']) ? sanitize_text_field($_POST['show_button']) : 'show';
    
    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => $posts_per_page,
        'paged'          => $page,
    );
    
    $query = new WP_Query($args);
    
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?> 
            <div class="col-md-4">
                <a href="<?php the_permalink(); ?>">
                <div class="noc-card">
                    <div class="noc-c-img shiny">
                        <?php if ($featured_image_url) : ?>
                            <img src="<?php echo esc_url($featured_image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php else : ?>
                            <img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/05/Rectangle-40384.png" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php endif; ?>
                        <div class="show-off"></div>
                    </div>
                    <div class="noc-c-content">
                        <h4 class="h4 text-<?php echo esc_attr($text_align); ?>"><?php the_title(); ?></h4>
                        <p class=" text-<?php echo esc_attr($text_align); ?>"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                        <?php if ($show_button === 'show') : ?>
                            <a href="<?php the_permalink(); ?>" class="noc-readmore">Read More</a>
                        <?php endif; ?>
                    </div>
                </div>
                </a>
            </div>
        <?php endwhile;
    endif;
    
    wp_reset_postdata();
    wp_die();
}


class Primary_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item'; // Add nav-item class to <li>
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $output .= '<li' . $class_names . '>';
        
        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target)     ? $item->target     : '';
        $atts['rel']    = !empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = !empty($item->url)        ? $item->url        : '';
        $atts['class']  = 'nav-link'; // Add nav-link class to <a>
        
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}