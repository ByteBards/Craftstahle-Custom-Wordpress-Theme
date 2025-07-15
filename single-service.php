<?php get_header(); ?>
<style>
    .topbanner {
    padding: 171px 0;
}
@media (max-width: 992px){
    .topbanner {
    padding: 55px 0;
}

}
</style>

<?php
// Render ACF Flexible Content Sections
if (have_rows('service_sections')) :
    while (have_rows('service_sections')) : the_row();
        $layout = get_row_layout();
        get_template_part('template-parts/sections/' . $layout);
    endwhile;
else : ?>
<div class="section globalpadding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Please Add Content</h1>
			</div>
		</div>
	</div>
</div>
<?php
endif;
?>


<?php get_footer(); ?>