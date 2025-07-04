 <section class="ourclient-sec">
    <?php
    $h2_text        = get_sub_field('our_clients_title');
    $p_text        = get_sub_field('our_clients_description');
    $clients_logos        = get_sub_field('clients_logos');
    ?>
  <div class="container">
    <div class="row ocs-top">
      <div class="col-md-6">
        <?php if ($h2_text) : ?>
            <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
        <?php endif; ?>
        <?php if ($p_text) : ?>
            <p><?php echo esc_html($p_text); ?></p>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php if ($clients_logos) : ?>
        <div class="grid-container">
            <?php foreach ($clients_logos as $image) : ?>
            <!-- Row 1 -->
            <div class="grid-item">
                <div class="ocs-gi-img">
                    <img src="<?php echo esc_url($image['url']); ?>" 
                            alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
 </section>