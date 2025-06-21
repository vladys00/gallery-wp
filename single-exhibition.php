<?php
get_header();
?>
<main>
    <?php
if (has_post_thumbnail()) {
    $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); // or 'medium', 'full', etc.
    echo '<img src="' . esc_url($thumb_url) . '" alt="' . esc_attr(get_the_title()) . '" class="my-custom-thumbnail">';
}
?>
    <header>
        <h1>
            <?php the_title();?> 
        </h1>
        <div>
            <p><?php echo get_field('start_date') ?>-<?php echo get_field('end_date') ?></p> | <span><?php echo get_field('location') ?></span>
        </div>
        <div>
            <p><?php echo get_field('opening_info') ?></p>
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
</main>
<?php
 get_footer();
?>