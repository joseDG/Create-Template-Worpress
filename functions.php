<?php  
//Iniciar elemntos necesarios de el tema
add_action('after_setup_theme', 'instalarTemplate');

function instalarTemplate(){
    register_nav_menus(array('main-menu'=>esc_html__('Menú principal','')));
}

//Agregar scripts style, JavaScript
add_action('wp_enqueue_scripts','scriptsTemplate');
function scriptsTemplate(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('template', get_template_directory_uri()."/css/template.css");
    wp_enqueue_script('jquery');
}

//Registro de Sidebar (area de los Widgets | activar el widgets)
add_action('widgets_init', 'iniciarWidget');

function iniciarWidget(){
    
    register_sidebar( array(
                        'name'=>esc_html__('Área de barra lateral derecha'),
                        'id'=>'barra_lateral_1'
                    ));
}


?>