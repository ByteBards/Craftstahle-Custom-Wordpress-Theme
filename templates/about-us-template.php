<?php
  /** 
    * Template name: About Us
    * Theme Name: Craftstahle-theme
  */
  get_header();
?>
<style>
  .tw-card-img {
    height: 449px;
}
</style>

<?php
// Render ACF Flexible Content Sections
if (have_rows('page_sections')) :
    while (have_rows('page_sections')) : the_row();
        $layout = get_row_layout();
        get_template_part('template-parts/sections/' . $layout);
    endwhile;
else :
    echo '<p>No sections found. Add some using ACF.</p>';
endif;

?>


<?php 
   get_footer();?>
