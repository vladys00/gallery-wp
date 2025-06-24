<?php
get_header();
?>
<div class="container">
    <?php
        while (have_posts()) {
            the_post();
            the_title('<h2><a href="'. get_permalink().'">','</a></h2>');
        }
     ?>
</div>

<?php
get_footer();
?>

