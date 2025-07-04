<section class="topbanner d-flex align-items-center justify-content-center">
    <?php  
    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
    $content = get_sub_field('sbc_content');
    ?>
    <div class="container" style="position:relative;bottom: 0;">
        <div class="row tb-topnav">
            <div class="col-md-12">
                <div class="tb-breadcrump d-flex align-items-center">
                    <a href="/">Home<img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/angle-rightg.svg" alt=""></a>
                    <a href="/services">services<img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/angle-rightg.svg" alt=""></a>
                    <span><?php echo the_title(); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="position:relative;bottom: 0;">
        <div class="bannerimg">
            <?php if ($featured_image) : ?>
                <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($h1_text); ?>">
            <?php else : ?>
                <img src="/wp-content/uploads/2025/05/topbaner-scaled.png" alt="<?php echo esc_attr($h1_text); ?>">
            <?php endif; ?>
            <img src="/wp-content/uploads/2025/06/bannershadow-scaled.png" class="bannershadow">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tb-innercontent d-flex flex-column align-items-center justify-content-center">
                            <h1><?php echo the_title(); ?></h1>
                            <?php echo the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="position:relative;bottom: 0;">
        <div class="row tb-toprow">
            <div class="col-md-12">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</section>