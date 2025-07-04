<?php
// Get ACF values
$section_info = get_sub_field('pc_section_info');
$title = get_sub_field('pc_title');
$description = get_sub_field('pc_description');
$post_type = get_sub_field('pc_select_post_type');
$posts_per_page = get_sub_field('pc_cards_per_page') ?: 3;
$text_align = get_sub_field('pc_text_align');
$show_button = get_sub_field('pc_read_more_button');

// Only show if section is set to show

?>

<section class="blogs-sec card-type-<?php echo esc_attr($post_type); ?> globalpadding">
    <div class="container">
        <?php if ($section_info === 'show') : ?>
        <div class="row tw-top-row">
            <div class="col-md-12">
                <div class="tw-tr-content d-flex flex-column align-items-center justify-content-center text-<?php echo esc_attr($text_align); ?>">
                    <?php if ($title) : ?>
                        <h2 class="h2 text-<?php echo esc_attr($text_align); ?>"><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>
                    <?php if ($description) : ?>
                        <p class="text-<?php echo esc_attr($text_align); ?>"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php
        // Initialize the query
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type'      => $post_type,
            'posts_per_page' => $posts_per_page,
            'paged'          => $paged,
        );

        $post_query = new WP_Query($args);
        ?>

        <div class="row blogpostrow" id="blog-posts-container">
            <?php if ($post_query->have_posts()) : ?>
                <?php while ($post_query->have_posts()) : $post_query->the_post();
                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>">
                        <div class="noc-card">
                            <div class="noc-c-img shiny">
                                <?php if ($featured_image_url) : ?>
                                    <img src="<?php echo esc_url($featured_image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                <?php else : ?>
                                    <img src="https://craftstahle.scdwsites.com/wp-content/uploads/2025/05/Rectangle-40384.png" alt="<?php echo esc_attr(get_the_title()); ?>">
                                <?php endif; ?>
                                <div class="show-off"></div>
                            </div>
                            <div class="noc-c-content">
                                <h4 class="h4 text-<?php echo esc_attr($text_align); ?>"><?php the_title(); ?></h4>
                                <p class="text-<?php echo esc_attr($text_align); ?>"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <?php if ($show_button === 'show') : ?>
                                    <a href="<?php the_permalink(); ?>" class="noc-readmore">Read More</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        
        <?php if ($post_query->max_num_pages > 1) : ?>
            <div class="text-center load-more-div">
                <button id="load-more-blogs" class="" 
                        data-page="1" 
                        data-max-pages="<?php echo $post_query->max_num_pages; ?>"
                        data-post-type="<?php echo esc_attr($post_type); ?>"
                        data-posts-per-page="<?php echo esc_attr($posts_per_page); ?>"
                        data-text-align="<?php echo esc_attr($text_align); ?>"
                        data-show-button="<?php echo esc_attr($show_button); ?>">
                    Load More
                </button>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php 
wp_reset_postdata();
?>

<script>
jQuery(document).ready(function($) {
    $('#load-more-blogs').on('click', function() {
        var button = $(this);
        var page = button.data('page');
        var maxPages = button.data('max-pages');
        var postType = button.data('post-type');
        var postsPerPage = button.data('posts-per-page');
        var textalign = button.data('text-align');
        var showButton = button.data('show-button');
        
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'load_more_posts',
                page: page + 1,
                post_type: postType,
                posts_per_page: postsPerPage,
                text_align: textalign,
                show_button: showButton
            },
            beforeSend: function() {
                button.text('Loading...').attr('disabled', true);
            },
            success: function(response) {
                if (response) {
                    $('#blog-posts-container').append(response);
                    button.data('page', page + 1);
                    
                    if (page + 1 >= maxPages) {
                        button.remove();
                    } else {
                        button.text('Load More').attr('disabled', false);
                    }
                } else {
                    button.remove();
                }
            }
        });
    });
});
</script>
