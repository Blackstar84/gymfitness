<?php get_header(); ?>

    <main class="seccion contenedor">
        <?php 
            $autor = get_queried_object();
            // echo "<pre>";
            // var_dump($categoria);
            // echo "</pre>";
        ?>
        <h2 class="text-primary text-center">
            Autor: <?php echo $autor->data->display_name; ?>
        </h2>
        <p class="text-center">
            <?php 
                // Para acceder a información extra de un usuario hacemos uso de meta
                // dentro del paréntesis indicamos que información deseamos obtener y luego
                // pasamos el id del usuario.
                echo get_the_author_meta('description', $autor->data->ID); 
            ?>
        </p>
        <ul class="listado-grid">
            <?php
                while( have_posts() ) { 
                    the_post();
                    get_template_part('template-parts/blog');
                }
            ?>
        </ul>
    </main>

<?php
    get_footer();
?>
