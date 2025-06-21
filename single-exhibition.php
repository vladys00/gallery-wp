<?php
get_header();
?>
<main>
    <img src="" alt="">
    <header>
        <h1>
            <?php the_title();?> 
        </h1>
        <div>
            <p></p> | <span></span>
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