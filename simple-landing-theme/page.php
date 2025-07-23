<?php
// Template for individual pages
get_header();
?>

<div class="page-content">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
            <?php
        }
    }
    ?>
</div>

<?php
get_footer();
?>
