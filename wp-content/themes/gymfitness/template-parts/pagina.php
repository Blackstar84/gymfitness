<?php
    while( have_posts() ): the_post();
    // Esta es una forma de pasar la clase y h1 al título en wordpress
        the_title('<h1 class="text-center text-primary">','</h1>');
        if(has_post_thumbnail()){
            the_post_thumbnail('full', array('class'=> 'imagen-destacada'));
        }
        
        
        the_content();
    endwhile;    