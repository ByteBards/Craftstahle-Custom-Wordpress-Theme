<section class="teams-sec globalpadding">
    <?php
        $h2_text = get_sub_field('teams_title');
        $p_text = get_sub_field('teams_description');
        $button_text = get_sub_field('teams_btn_text');
        $button_url = get_sub_field('teams_btn_url');
        $teams_rows = get_sub_field('teams_new_row'); // Get the repeater field
    ?>
    <div class="container">
        <div class="row teams-top-row">
            <div class="col-md-6">
                <div class="teams-tr-content">
                    <?php if ($h2_text) : ?>
                        <h2 class="h2"><?php echo esc_html($h2_text); ?></h2>
                    <?php endif; ?>
                    <?php if ($p_text) : ?>
                        <p><?php echo esc_html($p_text); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column align-items-end justify-content-end">
                <?php if ($button_text && $button_url) : ?>
                    <div class="teams-br-btn global-btn">
                        <a href="<?php echo esc_url($button_url); ?>"><?php echo esc_html($button_text); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($teams_rows) : ?>
            <?php foreach ($teams_rows as $row) : 
                $row_name = $row['teams_new_row_name'];
                $columns = $row['teams_new_column'];
            ?>
                <div class="row teams-scnd-row">
                    <div class="col-md-12">
                        <?php if ($row_name) : ?>
                            <h2 class="h2"><?php echo esc_html($row_name); ?></h2>
                        <?php endif; ?>
                    </div>
                    
                    <?php if ($columns) : ?>
                        <?php foreach ($columns as $column) : 
                            $heading = $column['tnc_heading'];
                            $sub_heading = $column['tsc_sub_heading'];
                            $phone = $column['tsc_phone_number'];
                            $email = $column['tsc_email'];
                            $location = $column['tsc_location'];
                            $location_url = $column['tsc_location_url'];
                        ?>
                            <div class="col-md-4">
                                <div class="teamscard">
                                    <div class="tc-top">
                                        <?php if ($heading) : ?>
                                            <h3 class="h3"><?php echo esc_html($heading); ?></h3>
                                        <?php endif; ?>
                                        <?php if ($sub_heading) : ?>
                                            <p><?php echo esc_html($sub_heading); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="tc-list">
                                        <ul>
                                            <?php if ($phone) : ?>
                                                <li>
                                                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>">
                                                        <div class="tc-icon"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/05/x32_7-Phone.svg" alt=""></div>
                                                        <div><?php echo esc_html($phone); ?></div>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            
                                            <?php if ($email) : ?>
                                                <li>
                                                    <a href="mailto:<?php echo esc_attr($email); ?>">
                                                        <div class="tc-icon"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/05/email-1-1.svg" alt=""></div>
                                                        <div><?php echo esc_html($email); ?></div>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            
                                            <?php if ($location) : ?>
                                                <li>
                                                    <?php if ($location_url) : ?>
                                                        <a href="<?php echo esc_url($location_url); ?>" target="_blank">
                                                    <?php else : ?>
                                                        <a href="#">
                                                    <?php endif; ?>
                                                        <div class="tc-icon"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/05/Group.svg" alt=""></div>
                                                        <div><?php echo esc_html($location); ?></div>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>