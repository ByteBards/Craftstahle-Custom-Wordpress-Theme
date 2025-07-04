<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<style>
    .topbanner {
    padding: 171px 0;
}
.row.tb-topnav {
    margin-bottom: 96px;
}
.tb-innercontent {
    margin-bottom: 116px;
}
.tb-innercontent h1{
	color: #2E2D2C;
}
</style>

<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();

	?>
<section class="topbanner d-flex align-items-center justify-content-center">
    <?php  $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
    <div class="container" style="position:relative;bottom: 0;">
        <div class="row tb-topnav">
            <div class="col-md-12">
                <div class="tb-breadcrump d-flex align-items-center">
                    <a href="/">Home<img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/angle-rightg.svg" alt=""></a>
                    <a href="/blogs">News<img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/06/angle-rightg.svg" alt=""></a>
                    <span><?php echo the_title(); ?></span>
                </div>
            </div>
        </div>
    </div>
	<div class="container" style="position:relative;bottom: 0;">
		<div class="row">
			<div class="col-md-6">
				<div class="tb-innercontent d-flex flex-column align-items-left justify-content-center">
						<h1><?php echo the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
    <div class="container" style="position:relative;bottom: 0;">
        <div class="bannerimg">
            <?php if ($featured_image) : ?>
                <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($h1_text); ?>">
            <?php else : ?>
                <img src="/wp-content/uploads/2025/05/topbaner-scaled.png" alt="<?php echo esc_attr($h1_text); ?>">
            <?php endif; ?>
            <img src="/wp-content/uploads/2025/06/bannershadow-scaled.png" class="bannershadow">
        </div>
    </div>
</section>

<?php
// Render ACF Flexible Content Sections
if (have_rows('post_section')) :
    while (have_rows('post_section')) : the_row();
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

<?php
endwhile; // End of the loop.

get_footer();
