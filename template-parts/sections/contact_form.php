 <section class="getintouch-section" style="background-color: #ffffff;">
    <?php
    $h2_text        = get_sub_field('cfs_title');
    $p_text        = get_sub_field('cfs_description');
    $shortcode        = get_sub_field('add_form_shotcode');
    ?>
    <div class="container">
        <div class="row gintsec-row">
            <div class="col-md-12">
                <div class="gitsec-form">
                    <div class="gitr-content">
                        <?php if ($h2_text) : ?>
                            <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
                        <?php endif; ?>
                        <?php if ($p_text) : ?>
                            <p><?php echo esc_html($p_text); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="gitr-from">
                        
                        <?php
                        if ($shortcode) :
                        echo do_shortcode($shortcode);
                        endif; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>