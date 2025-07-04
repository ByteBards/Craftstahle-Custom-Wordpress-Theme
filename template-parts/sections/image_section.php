
<section class="leftimg-section globalpadding">
    <?php
    $content = get_sub_field('is_content');
    $image = get_sub_field('is_image');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="lis-img">
                    <img src="<?php echo esc_url($image); ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="lis-content">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>
</section>