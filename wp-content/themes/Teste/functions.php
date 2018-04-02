<?php
//Carregamento de scripts
function carrega_scripts(){
    #funçao que carrega ESTILOS(nome do arquivo, caminho, dependencias, versao, tipo de exibicao/midia)
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
    #funçao que carrega SCRIPTS(nome do arquivo, caminho, dependencias, versao, tipo de exibicao/midia, onde sera carregado-inicio ou final, true= final)
    wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', array(), '1.0', null, true);
    #carrega ESTILO bootstrap através de cdn
    wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(), '4.0.0', 'all');
    #carrega SCRIPT bootstrap através de cdn
    wp_enqueue_script('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array('jquery'), null, true);
}

#chama funcao
add_action('wp_enqueue_scripts', 'carrega_scripts');

//Carregamento de menus(menús devem ser criados no admin)(identificador => nome de apresentação)
register_nav_menus(
    array('menu_principal' => 'Menu Principal',
          'menu_rodape' => 'Menu Footer'
        )
);
#adiciona opção de modificação através do admin
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
#opcao de posta com outro formatos
add_theme_support('post-formats', array('video', 'image'));

?>