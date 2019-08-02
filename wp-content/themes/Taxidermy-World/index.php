<?php get_header(); ?>

<!-- début de la boucle si l'article existe : -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- contenu de l'article -->
<div class="entry">
    <?php the_content(); ?>
</div>


<?php endwhile; else: ?>


<!-- si l'article n'existe pas, message d'erreur : -->
<p>Sorry, no posts matched your criteria.</p>

<!-- Fin de la boucle -->
<?php endif; ?>

<?php get_footer();?>