<?php get_header(); ?>
<div class="conteudo-dinamico">

    <main>
        <section class="slide">Slide</section>
        <section class="servicos">Serviços</section>
        
        <section class="meio">
            <aside class="barra-lateral">Barra Lateral</aside>
            <section class="noticias container col-md-6">
                <?php 
                    #se houver post
                    if(have_posts()):
                        #enquanto houve post, chama o post
                        while(have_posts()): the_post();
                        
                ?>
                    <h1><?php the_title(); ?></h1>
                <?php
                endwhile;
                else: 
                ?>
                    <p>Ainda não possui notícia!</p>
                <?php
                endif;
                ?>
            </section>
        </section>

        <section class="mapa">Mapa</section>    
    </main>
</div>
<?php get_footer(); ?>