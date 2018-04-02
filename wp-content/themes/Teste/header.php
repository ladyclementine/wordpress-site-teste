<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <title>Teste wordpress</title>
    <!-- Carrega functions.php -->
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="barra-top container">
        <div class="row">
            <div class="redes-socias col-md-4">Redes Sociais</div>
            <div class="pesquisa col-md-8">Pesquisas</div>
        </div>
    </div>

    <div class="area-menu container">
        <div class="row">
            <div class="logo col-md-3">Logo</div>
            <!-- Chama o menu de fuctions.php -->
            <div class="menu col-md-9 text-right"><?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>     </div>
            </div>
    </div>

</header>