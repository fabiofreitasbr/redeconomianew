<?php 
function scriptRoleta() {
    
    global $post;
    $slugPage = $post->post_name;
    if ($slugPage == 'roleta') {
        wp_enqueue_script( 'roletascripts', get_template_directory_uri() . '/js/script-roleta.js', array(), '', true );
        wp_localize_script( 'roletascripts', 'roleta_object',
            array( 
                'location' => admin_url( 'admin-ajax.php' ),
                'action' => 'roleta',
                'name' => 'roletaSave', 
            )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'scriptRoleta' );
?>