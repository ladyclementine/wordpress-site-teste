<h1><?php the_title(); ?></h1>
<!-- pode ser usado também the_post_thumbnail(400,500); -->
<?php the_post_thumbnail('medium'); ?>
<p>Publicado em: <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
<p>Categorias:<?php the_category(''); ?></p>
<p><?php the_tags('Tags: ', ','); ?></p>
<p><?php the_content(); ?></p>