<?php
// Main template file
get_header();
?>

<div class="content">
    <?php
    // Verifica si hay publicaciones disponibles
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <h1><?php the_title(); // Muestra el título ?></h1>
            <div><?php the_content(); // Muestra el contenido ?></div>
            <?php
        }
    } else {
        echo '<p>No hay contenido disponible.</p>'; // Mensaje si no hay publicaciones
    }
    ?>
</div>

<?php
get_footer();
?>
