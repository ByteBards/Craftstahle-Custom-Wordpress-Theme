<section class="threecards-section">
    <?php
    $title = get_sub_field('tc_title');
    $description = get_sub_field('tc_description');
    $cards = get_sub_field('tc_add_cards');
    ?>
    <div class="container">
        <div class="row tcs-toprow">
            <div class="col-md-12">
                <h2 class="h2"><?php echo $title; ?></h2>
                <p><?php echo $description; ?></p>
            </div>
        </div>
        <div class="row tcs-cardsrow">
          <?php if ($cards) : ?>
                <?php 
                $counter = 1; // Initialize counter
                foreach ($cards as $card) : 
                    $content = $card['tc_ac_content'];
                    // Format counter with leading zero for numbers < 10
                    $formatted_number = str_pad($counter, 2, '0', STR_PAD_LEFT); 
                ?>
                    <div class="col-md-4">
                        <div class="tcs-cr-card">
                            <div class="tcs-crc-top">
                                <span><?php echo $formatted_number; ?>.</span>
                            </div>
                            <div class="tcs-crc-content">
                                <?php echo $content; ?>
                            </div>
                        </div>
                    </div>
                <?php 
                    $counter++; // Increment counter
                endforeach; 
                ?>
            <?php endif; ?>
        </div>
    </div>
</section>