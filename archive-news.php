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
                <div class="news-grid__card">
                    <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="Thumbnail">
                    <p class="card-type"><?php echo get_field('news_type'); ?></p>
                    <h2><a href=""><?php the_title(); ?></a></h2>
                    <p class="card-description"><?php echo get_field('description'); ?></p>
                </div>
            <?php } ?>
    </div>
</div>
<?php
 get_footer();
 ?>