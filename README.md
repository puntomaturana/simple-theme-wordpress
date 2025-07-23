# Simple Landing Page Theme

Este tema de WordPress está diseñado para ayudar a los estudiantes a implementar una landing page en WordPress. La estructura es simple y contiene únicamente los archivos esenciales.

## Archivos del tema

### style.css
Define los metadatos del tema y estilos básicos. Incluye el campo `Text Domain` para soporte de localización.

### index.php
Archivo principal del tema. Muestra el contenido de las páginas y entradas.

### header.php
Contiene el encabezado del sitio, incluyendo el menú principal.

### footer.php
Contiene el pie de página del sitio.

### functions.php
Registra el menú principal y otras configuraciones básicas del tema.

## Funciones esenciales de WordPress

- `the_title()`: Muestra el título de la página o entrada.
- `the_content()`: Muestra el contenido de la página o entrada.
- `wp_nav_menu()`: Muestra el menú registrado en el tema.
- `get_header()`: Incluye el archivo `header.php`.
- `get_footer()`: Incluye el archivo `footer.php`.
- `have_posts()` y `the_post()`: Itera sobre las entradas o páginas disponibles.

## Cómo usar este tema
1. Copia la carpeta del tema en el directorio `wp-content/themes` de tu instalación de WordPress.
2. Activa el tema desde el panel de administración de WordPress.
3. Crea o edita páginas y entradas desde el panel de administración.
4. Configura el menú en la sección de Menús de WordPress y asígnalo al "Main Menu".