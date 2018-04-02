<?php
/*
Template Name: Páginas Gerais
*/
?>
<?php get_header(); ?>
<div class="conteudo-wrapper">

    <main>
        <div class="conteudo container">
            <?php 
                #se houver post
                if(have_posts()):
                    #enquanto houve post, chama o post
                    while(have_posts()): the_post();
                    
            ?>
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            <?php
            endwhile;
            else: 
            ?>
                <p>Ainda não possui notícia!</p>
            <?php
            endif;
            ?>
        </div>
    </main>
</div>
<?php get_footer(); ?>