<?php
get_header();
?>
<main>
    <div class="image-container">
        <?php
            if (has_post_thumbnail()) {
            $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); // or 'medium', 'full', etc.
            echo '<img src="' . esc_url($thumb_url) . '" alt="' . esc_attr(get_the_title()) . '" class="my-custom-thumbnail">';
            }
        ?>
    </div>
    <div class="text-container">
    <header>
        <h1>
            <?php the_title();?> 
        </h1>
        <div class="dates">
            <p><?php echo get_field('start_date') ?> - <?php echo get_field('end_date') ?></p> | <span><?php echo get_field('location') ?></span>
        </div>
        <div>
            <p class="opening-info"><?php echo get_field('opening_info') ?></p>
        </div>
    </header>
    <section>
        <div>
           <?php
                $blocks = parse_blocks(get_the_content());

                foreach ($blocks as $block) {
                    if ($block['blockName'] === 'core/paragraph') {
                        echo apply_filters('the_content', render_block($block));
                    }
                }
            ?>
        </div>
    </section>
    </div>
       
</main>
<?php
 get_footer();
?>