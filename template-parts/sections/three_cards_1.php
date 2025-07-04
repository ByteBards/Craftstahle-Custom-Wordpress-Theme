<section class="about3cards-sec">
    <?php
    $cards = get_sub_field('three_cards_1_cards'); 
    ?>
    
    <div class="container">
        <div class="row">
            <?php if ($cards) : ?>
                <?php foreach ($cards as $card) : 
                    $icon = $card['tc1c_icone'];
                    $heading = $card['tc1c_heading'];
                    $description = $card['tc1c_description'];
                ?>
                    <div class="col-md-4">
                        <div class="a3cs-card">
                            <div class="a3cs-c-top">
                                <?php if ($icon) : ?>
                                    <img src="<?php echo esc_url($icon); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="a3cs-c-content">
                                <?php if ($heading) : ?>
                                    <h4><?php echo esc_html($heading); ?></h4>
                                <?php endif; ?>
                                <?php if ($description) : ?>
                                    <p><?php echo esc_html($description); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>