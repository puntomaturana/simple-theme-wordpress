<?php
/* Template Name: Landing Page */
get_header();
?>

<div class="landing-page">
    <section class="hero">
        <h1><?php the_field('hero_title'); // Campo personalizado para el título ?></h1>
        <p><?php the_field('hero_subtitle'); // Campo personalizado para el subtítulo ?></p>
    </section>
    <section class="features">
        <h2><?php the_field('features_title'); ?></h2>
        <p><?php the_field('features_description'); ?></p>
    </section>
</div>

<?php
get_footer();
?>
