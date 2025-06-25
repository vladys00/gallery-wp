<?php
 get_header();
?>

<div class="container">
    <div class="filter">
        <p>Sections <svg fill="#000000" width="15px" height="15px" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M69.8437,43.3876,33.8422,13.3863a6.0035,6.0035,0,0,0-7.6878,9.223l30.47,25.39-30.47,25.39a6.0035,6.0035,0,0,0,7.6878,9.2231L69.8437,52.6106a6.0091,6.0091,0,0,0,0-9.223Z"></path></g></svg></p>
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