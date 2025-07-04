<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header-new';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
// Allow additional classes to be added via a custom hook
$extra_classes = apply_filters( 'add_custom_wrapper_classes', '' );
if ( ! empty( $extra_classes ) ) {
    $wrapper_classes .= ' ' . esc_attr( $extra_classes );
}
?>

<!-- <div class="custom-cursor">
  <div class="view">View</div>
</div> -->

<header id="main-header" class="<?php echo esc_attr( $wrapper_classes ); ?> header">

	<div class="container-fluid">
    <?php get_template_part( 'template-parts/header/site-nav' ); ?>
  </div>

</header><!-- #masthead -->
