<?php 

 ///

 function create_posttype() {
    
    register_post_type( 'cursos',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Cursos' ),
                'singular_name' => __( 'Curso' )
            ),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'cursos'),
        )
    );

    register_post_type( 'talleres',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Talleres' ),
                'singular_name' => __( 'Taller' )
            ),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'talleres'),
        )
    );

    register_post_type( 'servicios',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Servicios' ),
                'singular_name' => __( 'Servicio' )
            ),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'servicios'),
        )
    );

}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

//options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page('opciones');
	
}