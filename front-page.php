<?php
get_header();
?>
<div class="main-carousel">
    <!-- <div class="main-carousel">
        <div class="carousel-cell">Image 1</div>
        <div class="carousel-cell">image 2</div>
        <div class="carousel-cell">Image 3</div>
    </div>
    <div> -->
        
        <?php
        $args = [
                'post_type' => 'exhibition', 
                'posts_per_page' => 5,       
            ];
        $exhibitions = new WP_Query($args);

        if ($exhibitions -> have_posts()){
            while ($exhibitions -> have_posts()){
            $exhibitions -> the_post()?>
            <div class="carousel-cell">
                <div class="carousel-container">
                    <div class="carousel-container--image">
                        <?php
                            if (has_post_thumbnail()) {
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            echo '<img  src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title()) . '">';
                            }
                        ?>
                    </div>
                    <div class="carousel-container--banner">
                        <div>
                            <span><?php echo get_field('location') ?></span>
                            <h2><?php the_title();  ?></h2>
                            <p><?php echo get_field('start_date') ?> - <?php echo get_field('end_date') ?></p>
                            <a href="<?php echo get_permalink(get_the_ID()); ?>">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php }
           wp_reset_postdata();
                } else {
                    echo 'No exhibitions found';
                }
        ?>
        </div>
    </div>

</div>
<div class="exhibitions-container">
    <div>
        <p>Exhibitions</p>
    </div>
    <div class="exhibitions-grid">
        <?php
        $args = [
                'post_type' => 'exhibition', 
                'posts_per_page' => 3,       
            ];
        $exhibitions = new WP_Query($args);

        if ($exhibitions -> have_posts()){
            while ($exhibitions -> have_posts()){
            $exhibitions -> the_post()?>
            <div class="exhibition-card">
                    <div class="image-container">
                        <?php
                            if (has_post_thumbnail()) {
                            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            echo '<img  src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title()) . '">';
                            }
                        ?>
                    </div>
                    <div class="">
                        <div>
                            <span><?php echo get_field('location') ?></span>
                            <h2><?php the_title();  ?></h2>
                            <p><?php echo get_field('start_date') ?> - <?php echo get_field('end_date') ?></p>
                        </div>
                    </div>
            </div>
            
            
        <?php }
           wp_reset_postdata();
                } else {
                    echo 'No exhibitions found';
                }
        ?>
    </div>
    </div>
</div>
<?php
 get_footer();
?>
