<?php 
    function rutas(){
        wp_register_style("footer-style", get_template_directory_uri() . "/assets/css/footer.css", array(), false, "all");
        wp_enqueue_style("style", get_stylesheet_uri(), array("footer-style"), false, "all");
    }

    add_action("wp_enqueue_scripts", "rutas");
?>