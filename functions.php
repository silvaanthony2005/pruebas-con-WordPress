<?php 
    function rutas(){
        wp_enqueue_style("style", get_stylesheet_uri(), array(), false, "all");
    }

    add_action("wp_enqueue_scripts", "rutas");
?>