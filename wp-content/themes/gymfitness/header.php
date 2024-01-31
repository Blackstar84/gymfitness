<!DOCTYPE html>
<!-- <html lang="es">     -->
    <!-- Con esto tomará el lenguaje en el que fue instalado wordpress -->
<html <?php language_attributes(); ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
            </div>
            <?php
                /**
                 * De esta manera obtenemos el menú que hemos creado en functions.php
                 * y en el wp_nav_menu() le pasamos ese args que contiene la información
                 * del menú principal.
                 */
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?>
        </div>
    </header>