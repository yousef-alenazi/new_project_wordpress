<?PHP

//
///
///

add_theme_support('post-thumbnails');

function con_sty(){
    wp_enqueue_style('Saudi_Leag-boot-st',get_template_directory_uri().'/css/bootstrap.min.css',);
    wp_enqueue_style('Saudi_Leag-font-st',get_template_directory_uri().'/css/fontawesome.min.css',);
    wp_enqueue_style('saudi',get_template_directory_uri().'/css/saudi.css'); 
}
//C:\new_project\wp-content\themes\Saudi_League\css\saudi.css
function con_js(){
    wp_enqueue_script('Saudi_Leag-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);
}

add_action('wp_enqueue_scripts','con_sty');
add_action('wp_enqueue_scripts','con_js');


function menusy (){
    register_nav_menus(array(

        'header' => 'Navigation Bar',
        'footer-menu'=>'footer bar'
    ));
}


function show(){
    wp_nav_menu();
}


add_action('init','menusy');