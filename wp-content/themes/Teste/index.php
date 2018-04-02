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
                    <!-- pega o formato do post e mostra somento o que for necessario a partir dos arquivos  -->
                    <?php get_template_part('content', get_post_format());?>
                        
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