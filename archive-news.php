<?php
 get_header();
?>

<div class="container">
    <div class="filter">
        <p>Sections</p>
    </div>
    <div class="news-grid">
              <?php
                while (have_posts()) {
                the_post();?>
                <a href="<?php the_permalink(); ?>" class="news-grid__card-link">
                    <div class="news-grid__card">
                        <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="Thumbnail">
                        <p class="card-type"><?php echo get_field('news_type'); ?></p>
                        <h2><?php the_title(); ?></h2>
                        <p class="card-description"><?php echo get_field('description'); ?></p>
                    </div>
                </a>
            <?php } ?>
    </div>
</div>
<?php
 get_footer();
 ?>