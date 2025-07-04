
<?php
$post_imges = get_sub_field('ac_tci_add_images');
?>


 <?php if ($post_imges) : ?>
<div class="towimggsdiv">
    <?php foreach ($post_imges as $image) : ?>
     <div class="tid-col"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></div>
    <?php endforeach; ?>
</div>
<?php endif; ?>