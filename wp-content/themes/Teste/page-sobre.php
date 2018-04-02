<?php get_header(); ?>
<div class="conteudo-dinamico">
    <main>
        <section class="meio">
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
    </main>
</div>
<?php get_footer(); ?>