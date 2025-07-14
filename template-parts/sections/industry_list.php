 <section class="pro-indus-section globalpadding">
    <?php
    $ind_rows = get_sub_field('il_add_row'); 
    ?>
    <div class="container">
        <div class="pis-main">
            <?php if ($ind_rows) : ?>
                <?php foreach ($ind_rows as $ind_row) : 
                    $image = $ind_row['il_ar_image'];
                    $content = $ind_row['il_ar_content'];
                ?>
            <div class="row" style="position:relative;">
                <div class="col-md-10">
                    <div class="pis-main-content">
                        <?php if ($content) : ?>
                            <?php echo wp_kses_post($content); ?>
                        <?php endif; ?>
                    </div>
                    <div class="pis-main-img shiny">
                        <?php if ($image) : ?>
                            <img src="<?php echo esc_url($image); ?>">
                        <?php endif; ?>
                        <div class="show-off"></div>
                    </div>
                </div>
            </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
 </section>