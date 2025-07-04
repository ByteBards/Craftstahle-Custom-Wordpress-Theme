<?php 
$mapurl        = get_sub_field('m_iframe_url');
if ($mapurl ) : ?>
    <section class="cu-map-section globalpadding">
        <div style="width: 100%;">
        <iframe src="<?php echo esc_html($mapurl ); ?>" width="100%" height="593" frameborder="0" style="border:0"></iframe>
        </div>
 </section>
<?php endif; ?>