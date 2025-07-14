
 <section class="ourvision-sec globalpadding">
    <?php
    $our_vision_image = get_sub_field('our_vision_image');
    $h2_text        = get_sub_field('our_vision_heading');
    $p_text        = get_sub_field('our_vision_description');
    ?>
  <div class="container">
    <div class="row ovs-row" style="position:relative;">
      <div class="col-md-6">
        <div class="ovs-main">
            <?php if ($h2_text) : ?>
                <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
            <?php endif; ?>
          <div class="ovs-m-descr">
            <?php if ($p_text) : ?>
                <?php echo wp_kses_post($p_text); ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="ovs-absimg shiny">
            <?php if ($our_vision_image) : ?>
                <img src="<?php echo esc_url($our_vision_image); ?>" alt="">
            <?php endif; ?>
            <div class="show-off"></div>
        </div>
      </div>
    </div>
  </div>
 </section>