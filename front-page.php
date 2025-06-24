<?php
get_header();
?>
<div class="front-container">
    <h1>This is the front page</h1>
    <div>
        <?php
        $args = [
                'post_type' => 'exhibition', 
                'posts_per_page' => 5,       
            ];
        $exhibitions = new WP_Query($args);

        if ($exhibitions -> have_posts()){
            while ($exhibitions -> have_posts()){
            $exhibitions -> the_post()?>
            <h2><?php the_title();  ?></h2>
        <?php }
           wp_reset_postdata();
                } else {
                    echo 'No exhibitions found';
                }
        ?>
    </div>

</div>
<?php
 get_footer();
?>
