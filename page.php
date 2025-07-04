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

/* Start the Loop */
// while ( have_posts() ) :
// 	the_post();
// 	get_template_part( 'template-parts/content/content-page' );

// 	if ( comments_open() || get_comments_number() ) {
// 		comments_template();
// 	}
// endwhile; 
?>

<?php
// Render ACF Flexible Content Sections
if (have_rows('page_sections')) :
    while (have_rows('page_sections')) : the_row();
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



get_footer();
