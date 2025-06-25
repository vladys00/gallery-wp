<?php
get_header();
?>
<div class="container">
    <div class="filter">
        <p>Current</p>
    </div>
    <div class="grid">
         <?php
                while (have_posts()) {
                the_post();?>
                <a class="exhibition-grid__card-link" href="<?php the_permalink(); ?>" >
                    <div>
                        <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="Thumbnail">
                        <p><?php echo get_field('location')?></p>
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo get_field('start_date')?>-<?php echo get_field('end_date')?></p>
                    </div>
                </a>
    <?php } ?>
    </div>
    
</div>

<?php
get_footer();
?>

