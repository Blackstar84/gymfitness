<?php get_header(); ?>

    <main class="contenedor seccion con-sidebar">
        <section class="contenido-principal">
            <?php 
                get_template_part('template-parts/clase');
            ?>
        </section>
        <?php
            /**
             * Al poner clases va a buscar el archivo sidebar que tenga clases en su nombre
             * en este caso nuestro archivo se llama sidebar-clases entonces será este
             * el que utilizaría.
             * 
             * Esto podemos hacerlo para headers, footers, así podremos tener diferentes
             * archivos que serían utilizados en diferentes lugares
             * 
             * ejemplo: tenemos un archivo llamado footer-personal.php
             * para llamarlo utilizamos el nombre que va luego del guión y wordpress
             * se encargará de utilizar ese archivo en específico
             * get_footer('personal');  
             * 
             */
            get_sidebar('clases');
        ?>
    </main>



<?php
    get_footer();
?>
