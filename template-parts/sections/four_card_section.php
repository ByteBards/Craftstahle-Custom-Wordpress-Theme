 <section class="cu-info-section">
    <?php
    $cards = get_sub_field('add_card'); 
    ?>
    <div class="container">
        <div class="row gintsec-row">
            <?php if ($cards) : ?>
            <?php foreach ($cards as $card) : 
                $icon = $card['fcs_icon'];
                $heading = $card['fcs_title'];
                $description = $card['fcs_description'];
            ?>
            <div class="col-md-3">
              <div class="cuis-card">
                  <div class="cuiss-icon">
                        <?php if ($icon) : ?>
                            <img src="<?php echo esc_url($icon); ?>">
                        <?php endif; ?>
                  </div>
                  <div class="cuiss-infomain">
                    <?php if ($heading) : ?>
                    <div class="cuiss-heading"><?php echo esc_html($heading); ?></div>
                    <?php endif; ?>
                    <?php if ($description) : ?>
                    <div class="cuiss-info"><?php echo wp_kses_post($description); ?></div>
                    <?php endif; ?>
                  </div>
              </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
 </section>