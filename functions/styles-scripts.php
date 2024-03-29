<?php
function theme_styles() {

    $rand_num = rand();
    
    // if ( is_singular(array('plant', 'habitat')) || is_page('virtual-tour') || is_page($virtual_tour_page_id_fre) || $post->post_parent == $virtual_tour_page_id || $post->post_parent == $virtual_tour_page_id_fre ) {
    //     // SWIPER CSS
    //     wp_register_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), null );
    //     wp_enqueue_style( 'swiper' );

    //     // SWIPER JS
    //     wp_register_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true );
    //     wp_enqueue_script( 'swiper' );

    //     // SWIPER INIT JS
    //     wp_register_script( 'swiper-init', get_template_directory_uri() . '/assets/js/swiper.js', array(), null, true );
    //     wp_enqueue_script( 'swiper-init' );

    //     // LIGHTBOX JS
    //     wp_register_script( 'lightbox', get_template_directory_uri() . '/assets/js/lightbox.js', array(), null, true );
    //     wp_enqueue_script( 'lightbox' );

    //     // BOOTSTRAP STYLES AND SCRIPTS
    //     // wp_register_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), null);
    //     // wp_enqueue_style('bootstrapcss');
    //     wp_register_script( 'bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), null, true );
    //     wp_enqueue_script( 'bootstrapjs' );
    // }

    wp_register_style( 'main', get_stylesheet_directory_uri() . '/assets/css/styles.css?ver=' . $rand_num, array(), null );
    wp_enqueue_style( 'main' );

    // ADOBE FONTS
    wp_register_style( 'adobe-font', 'https://use.typekit.net/ppy3tkz.css', false, null, 'all' );
    wp_enqueue_style('adobe-font');

    wp_register_script( 'fontawesome', 'https://kit.fontawesome.com/7cf12db9b6.js?ver=' . $rand_num, array(), null, true );
	wp_enqueue_script( 'fontawesome' );

    wp_register_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js?ver=' . $rand_num, array(), null, true );
	wp_enqueue_script( 'main' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );