<?php

// Includes

require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';

    function gymfitness_setup() {
        // Imagenes destacadas
        add_theme_support('post-thumbnails');

        //Titulos para SEO
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'gymfitness_setup');

    // Este archivo se inyecta directamente en el tema de wordpress sin tener que hacer nada más
    function gymfitness_menus(){
        register_nav_menus(array(
            'menu-principal' => __('Menu Principal', 'gymfitness')
        ));
    }

    /**
     * Aquí le estamos diciendo que cuando wordpress se inicialice ejecute esta función 
     */
    add_action('init', 'gymfitness_menus');

    function gymfitness_scripts_styles() {

        // Archivos CSS

        wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');

        wp_enqueue_style('lightboxcss', get_template_directory_uri() . "/css/lightbox.min.css", 
        array(), "2.11.4");
        /**
         * Al agregar dentro de array('normalize') le estamos diciendo a wordpress que primero cargue
         * normalize y luego nuestra hoja de estilos
         */
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

        // Archivos JS

        // Como lightbox requiere de jquery, podemos agregarlo de la siguiente manera
        // wp_enqueue_script('jquery');

        // O agregarla dentro del array de lo que necesita para funcionar y dentro del array
        // le pasamos el jquery

        // Al agregar true al final del los parámetros le estamos diciendo que el js se 
        // cargue en el footer
        wp_enqueue_script('lightboxjs', get_template_directory_uri() . "/js/lightbox.min.js", 
        array('jquery'), '2.11.4', true);

    }

    add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');


    // Definir zona de Widgets

    function gymfitness_widgets() {
        register_sidebar(array(
            'name' => 'Sidebar 1',
            'id' => 'sidebar_1',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-center text-primary">',
            'after_title' => '</h3>'
        ));

        register_sidebar(array(
            'name' => 'Sidebar 2',
            'id' => 'sidebar_2',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-center text-primary">',
            'after_title' => '</h3>'
        ));
    }

    add_action('widgets_init', 'gymfitness_widgets');


    // Crear Shortcode

    function gymfitness_ubicacion_shortcode() {
        ?>
        <div class="mapa">
            <?php 
                if(is_page('contacto')) {
                    the_field('ubicacion');            
                }
            ?>
        </div>
        <h2 class="text-center text-primary">Formulario de Contacto</h2>
        <?php
        echo do_shortcode('[contact-form-7 id="e08c094" title="Formulario de contacto 1"]');
    }

    add_shortcode('gymfitness_ubicacion', 'gymfitness_ubicacion_shortcode');