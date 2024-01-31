<footer class="footer contenedor">
    <hr>
    <div class="contenido-footer">
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
        <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name'). " ".  date('Y'); ?></p>
    </div>
</footer>

<?php 
    /**
     * Esto agregamos para que aparezca la barra de edición de páginas en la parte superior
     * cuando un usuario está Autenticado
     */
    wp_footer(); 
?>


</body>
</html>