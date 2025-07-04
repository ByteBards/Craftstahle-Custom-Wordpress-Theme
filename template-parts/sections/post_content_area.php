<?php
    $facebook = get_field('facebook', 'options');
    $instagram = get_field('instagram', 'options');
    $x_twitter = get_field('x_twitter', 'options');
    $youtube = get_field('youtube', 'options');
    
    ?>
<section class="postcontent">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="contentmain">
                    <?php
                    // Render ACF Flexible Content Sections
                    if (have_rows('add_content')) :
                        while (have_rows('add_content')) : the_row();
                            $layout = get_row_layout();
                            get_template_part('template-parts/sections/' . $layout);
                        endwhile;
                    else :
                        echo '<p>No sections found. Add some using ACF.</p>';
                    endif;

                    ?>
				</div>
				<div class="socialinfo">
					<span>Find Us on:</span>
					<ul>
                        <?php if ($facebook) : ?>
						<li><a href="<?php echo $facebook; ?>"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/fb.svg" alt=""></a></li>
                        <?php endif; ?>
                        <?php if ($instagram) : ?>
						<li><a href="<?php echo $instagram; ?>"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/insta.svg" alt=""></a></li>
                        <?php endif; ?>
                        <?php if ($x_twitter) : ?>
						<li><a href="<?php echo $x_twitter; ?>"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/x.svg" alt=""></a></li>
                        <?php endif; ?>
                        <?php if ($youtube) : ?>
						<li><a href="<?php echo $youtube; ?>"><img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/youtbe.svg" alt=""></a></li>
                        <?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>