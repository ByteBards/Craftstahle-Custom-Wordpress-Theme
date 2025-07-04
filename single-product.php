<?php get_header(); ?>
<?php
// Get ACF values
$p_banner_description = get_field('p_banner_description');
// Detail section 
$pd_display_condition = get_field('pd_display_condition');
$pd_title = get_field('pd_title');
$pd_top_content_button = get_field('pd_top_content_button');
$pd_bottom_content = get_field('pd_bottom_content');
$pd_gallery = get_field('pd_gallery');
// Profile & Dimensions
$ppd_display_condition = get_field('ppd_display_condition');
$ppd_title = get_field('ppd_title');
$ppd_add_info = get_field('ppd_add_info');
// Timetables
$pt_display_condition = get_field('pt_display_condition');
$pt_title = get_field('pt_title');
$pt_description = get_field('pt_description');
$ppt_timetables_gallery = get_field('ppt_timetables_gallery');
// Profiling Shapes
$pps_display_condition = get_field('pps_display_condition');
$pps_title = get_field('pps_title');
$pps_description = get_field('pps_description');
$pps_shapes_cards = get_field('pps_shapes_cards');
// Additional Specifications
$pas_display_condition = get_field('pas_display_condition');
$pas_title = get_field('pas_title');
$pas_description = get_field('pas_description');
$pas_bg_image = get_field('pas_bg_image');


?>
<section class="topbanner d-flex align-items-center justify-content-center">
    <?php  $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
    
    <div class="bannerimg">
        <?php if ($featured_image) : ?>
            <img src="<?php echo esc_url($featured_image); ?>" alt="">
        <?php else : ?>
            <img src="/wp-content/uploads/2025/05/topbaner-scaled.png" alt="">
        <?php endif; ?>
        <img src="/wp-content/uploads/2025/06/bannershadow-scaled.png" class="bannershadow">
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tb-innercontent d-flex flex-column align-items-center justify-content-center">
                        <h1><?php echo the_title(); ?></h1>
                        <?php if ($p_banner_description) : ?>
                            <h4><?php echo esc_html($p_banner_description); ?></h4>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-tab-section globalpadding">
    <div style="background-color:#f5f5f5;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pts-gride">
                    <?php if ($pd_display_condition === 'show') : ?>
                    <div class="pts-item">
                        <a href="#detail">Details</a>
                    </div>
                     <?php endif; ?>
                    <?php if ($ppd_display_condition === 'show') : ?>
                    <div class="pts-item">
                        <a href="#profile">Profile & Dimensions</a>
                    </div>
                     <?php endif; ?>
                    <?php if ($pt_display_condition === 'show') : ?>
                    <div class="pts-item">
                        <a href="#addition-info">Additional Specifications</a>
                    </div>
                     <?php endif; ?>
                    <?php if ($pps_display_condition === 'show') : ?>
                    <div class="pts-item">
                        <a href="#timetable">Accelerate Production Timetables</a>
                    </div>
                     <?php endif; ?>
                    <?php if ($pas_display_condition === 'show') : ?>
                    <div class="pts-item">
                        <a href="#3d-shaping">3D Profiling Shapes</a>
                    </div>
                     <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php if ($pd_display_condition === 'show') : ?>
<section class="product-detail-section globalbottompadding" id="detail">
    <div class="container">
        <div class="row pds-rowtop">
            <div class="col-md-6">
                <div class="pds-slider">
                    <div class="gallery-wrapper">
                        <!-- Main Slider -->
                        <div class="main-slider-wrapper">
                            <div id="main-slider" class="owl-carousel">
                                <?php if ($pd_gallery) : ?>
                                    <?php foreach ($pd_gallery as $image) : ?>
                                        <div class="item">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                            <!-- Custom Arrows -->
                            <div class="custom-nav">
                                <button class="main-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                                        <path d="M1.66663 5L0.959519 4.29289L0.252412 5L0.959519 5.70711L1.66663 5ZM11.6666 6C12.2189 6 12.6666 5.55228 12.6666 5C12.6666 4.44772 12.2189 4 11.6666 4V6ZM5.66663 1L4.95952 0.292893L0.959519 4.29289L1.66663 5L2.37373 5.70711L6.37373 1.70711L5.66663 1ZM1.66663 5L0.959519 5.70711L4.95952 9.70711L5.66663 9L6.37373 8.29289L2.37373 4.29289L1.66663 5ZM1.66663 5V6H11.6666V5V4H1.66663V5Z" fill="#2E2D2C"/>
                                    </svg>
                                </button>
                                <button class="main-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                                        <path d="M11.3334 5L12.0405 4.29289L12.7476 5L12.0405 5.70711L11.3334 5ZM1.33337 6C0.781089 6 0.333374 5.55228 0.333374 5C0.333374 4.44772 0.781089 4 1.33337 4V6ZM7.33337 1L8.04048 0.292893L12.0405 4.29289L11.3334 5L10.6263 5.70711L6.62627 1.70711L7.33337 1ZM11.3334 5L12.0405 5.70711L8.04048 9.70711L7.33337 9L6.62627 8.29289L10.6263 4.29289L11.3334 5ZM11.3334 5V6H1.33337V5V4H11.3334V5Z" fill="#2E2D2C"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Thumbnail Slider -->
                        <?php if ($pd_gallery) : ?>
                            <div id="thumb-slider" class="owl-carousel thumb-slider">
                                <?php foreach ($pd_gallery as $index => $image) : ?>
                                    <div class="thumb-item" data-index="<?php echo $index; ?>">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pds-content">
                    <?php if ($pd_title) : ?>
                        <?php echo $pd_title; ?>
                    <?php endif; ?>
                    
                    <?php if ($pd_top_content_button) : ?>
                    <div class="pds-c-btns">
                        <?php foreach ($pd_top_content_button as $topbtns) : 
                            $button_text = $topbtns['button_text'];
                            $button_url = $topbtns['button_url'];
                        ?>
                        <div class="pds-c-btn global-btn global-colr">
                            <a href="<?php echo esc_url($button_url); ?>"><?php echo esc_html($button_text); ?></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row pds-rowbtm">
            <div class="col-md-12">
                <div class="pdsrb-content">
                    <?php if ($pd_bottom_content) : ?>
                        <?php echo $pd_bottom_content; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if ($ppd_display_condition === 'show') : ?>
<section class="profile-dimension-section" style="background-color:#F5F5F5;" id="profile">
    <div class="container">
        <div class="row pds-toprow">
            <div class="col-md-6">
                <?php if ($ppd_title) : ?>
                    <h2 class="h2"><?php echo esc_html($ppd_title); ?></h2>
                <?php endif; ?>
            </div>
        </div>
        
        <?php if ($ppd_add_info) : ?>
        <div class="row profile-table">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Minimum</th>
                            <th>Maximum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // Split the repeater items into two tables
                        $half = ceil(count($ppd_add_info) / 2);
                        $first_half = array_slice($ppd_add_info, 0, $half);
                        
                        foreach ($first_half as $item) : 
                            $icon = $item['ppd_profile_icon'];
                            $minimum = $item['ppd_minimum'];
                            $maximum = $item['ppd_maximun'];
                        ?>
                            <tr>
                                <td>
                                    <?php if ($icon) : ?>
                                        <img src="<?php echo esc_url($icon) ?>" alt="">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo esc_html($minimum); ?></td>
                                <td><?php echo esc_html($maximum); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <div class="col-md-6">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Minimum</th>
                            <th>Maximum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $second_half = array_slice($ppd_add_info, $half);
                        
                        foreach ($second_half as $item) : 
                            $icon = $item['ppd_profile_icon'];
                            $minimum = $item['ppd_minimum'];
                            $maximum = $item['ppd_maximun'];
                        ?>
                            <tr>
                                <td>
                                    <?php if ($icon) : ?>
                                        <img src="<?php echo esc_url($icon) ?>" alt="">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo esc_html($minimum); ?></td>
                                <td><?php echo esc_html($maximum); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php if ($pt_display_condition === 'show') : ?>
<section class="product-timetable-section globalpadding" id="timetable">
    <div class="container">
        <div class="row pts-toprow">
            <div class="col-md-12">
                <?php if ($pt_title) : ?>
                    <h2 class="h2"><?php echo esc_html($pt_title); ?></h2>
                <?php endif; ?>
                <?php if ($pt_description) : ?>
                    <p><?php echo esc_html($pt_description); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row pts-gridrow">
            <div class="col-md-12">
                <?php if ($ppt_timetables_gallery) : ?>
                <div class="pts-gridmain">
                    <?php foreach ($ppt_timetables_gallery as $t_image) : ?>
                    <div class="pts-grideitem">
                        <div class="pts-gi-img shiny">
                            <img src="<?php echo esc_url($t_image['url']); ?>" alt="<?php echo esc_attr($t_image['alt']); ?>">
                            <div class="show-off"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if ($pps_display_condition === 'show') : ?>
<section class="threedshaping-section" style="background-color:#F5F5F5;" id="3d-shaping">
    <div class="container">
        <div class="row tds-toprow">
            <div class="col-md-8">
                <?php if ($pps_title) : ?>
                    <h2 class="h2"><?php echo esc_html($pps_title); ?></h2>
                <?php endif; ?>
                <?php if ($pps_description) : ?>
                    <p><?php echo esc_html($pps_description); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($pps_shapes_cards) : ?>
        <div class="row tds-main">
            <?php foreach ($pps_shapes_cards as $card) : 
                $img = $card['pps_s_image'];
                $heading = $card['pps_s_heading'];
                $description = $card['pps_s_content'];
            ?>
            <div class="col-md-4">
                <div class="tdsm-card">
                    <div class="tdsm-c-img">
                        <div class="tdsm-img shiny">
                            <?php if ($img) : ?>
                            <img src="<?php echo esc_url($img); ?>" alt="">
                            <?php endif; ?>
                            <div class="show-off"></div>
                        </div>
                    </div>
                    <div class="tdsm-c-content">
                        <?php if ($heading) : ?>
                            <h3 class="h3"><?php echo esc_html($heading); ?></h3>
                        <?php endif; ?>
                        <?php if ($description) : ?>
                            <?php echo $description; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<?php if ($pas_display_condition === 'show') : ?>
<section class="product-last-section globalpadding" id="addition-info">
    <div class="container" style="background-image:url('<?php echo esc_url($pas_bg_image); ?>');">
        <div class="pls-main row">
            <div class="col-md-6">
                <div class="pls-m-content">
                    <?php if ($pas_title) : ?>
                        <h2 class="h2"><?php echo esc_html($pas_title); ?></h2>
                    <?php endif; ?>
                    <?php if ($pas_description) : ?>
                        <p><?php echo esc_html($pas_description); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>




<?php get_footer(); ?>